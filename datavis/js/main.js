if ( ! Detector.webgl ) Detector.addGetWebGLMessage();


var container;

var views, glScene, renderer, camera, cssrenderer;
var cssScene, cssRenderer;

var light;

var windowWidth = $("#container").innerWidth(),
	windowHeight = $("#container").innerHeight();

var realData;
var descriptions;

var startPosition;

var companies;
var yearConversion = [2017, 2016, 2015, 2014, 2013];

var twentyseventeen;
var twentysixteen;
var twentyfifteen;
var twentyfourteen;
var twentythirteen;
var selected = null;

var news = [];

var clickable = [];

var materials;

var resizeGraph;

var current = null;

Number.prototype.map = function (in_min, in_max, out_min, out_max) {
  return (this - in_min) * (out_max - out_min) / (in_max - in_min) + out_min;
}

var data = {
  labels: {
  	y: ["3", "3.5","4","4.5","5"],
    x: ["", "$200", "$180", "$160", "$140", "$120", "$100", "$80", "$60", "$40", "$20" ],
    z: [""]
  },
  units: {
  	y: "Bliss Score",
    x: "Salary (in thousands)",
    z: ""
  }
};

//in thousands

$.getJSON( "./js/datavis.json", function( data ) {
	realData = data;
	init();
	render();
});

$.getJSON( "./js/description.json", function( data ) {
	descriptions = data;
});

var graphDimensions = {
	w:2500,
	d:4000,
	h:2000
};


function labelAxis(width, data, direction, units){

  var separator = 2*width/data.length,
		p = {
			x:0,
			y:0,
			z:0
		},
		dobj = new THREE.Object3D();

  for ( var i = 0; i < data.length; i ++ ) {
		var label = makeTextSprite(data[i]);

		label.position.set(p.x,p.y,p.z);

		dobj.add( label );
		if (direction=="y"){
			p[direction]+=separator;
		}else{
			p[direction]-=separator;
		}

  }
  var title = makeTextSprite(units);
  if (direction == "y") {
  	title.position.set(p.x+100,width/2+100,p.z);
  } else if (direction == "z"){
  	title.position.set(p.x,p.y,width/2);
  } else if (direction == "x"){
  	title.position.set(-width,p.y -100,p.z);
  }

  dobj.add( title );

  return dobj;
}


// This was written by Lee Stemkoski
// https://stemkoski.github.io/Three.js/Sprite-Text-Labels.html
function makeTextSprite( message, parameters )
{
	if ( parameters === undefined ) parameters = {};

	var fontface = parameters["fontface"] || "Helvetica";
	var fontsize = parameters["fontsize"] || 120;
	var canvas = document.createElement('canvas');

	var context = canvas.getContext('2d');
	context.font = fontsize + "px " + fontface;

	// get size data (height depends only on font size)
	var metrics = context.measureText( message )*100;
	var textWidth = metrics.width ;

	// text color
	context.fillStyle = "rgba(0, 0, 0, 1.0)";
	context.fillText( message, 0, fontsize);
	context.textAlign = "center";
	context.textBaseline = "middle";

	// canvas contents will be used for a texture
	var texture = new THREE.Texture(canvas)
	texture.minFilter = THREE.LinearFilter;
	texture.needsUpdate = true;

	var spriteMaterial = new THREE.SpriteMaterial({ map: texture, useScreenCoordinates: false});
	var sprite = new THREE.Sprite( spriteMaterial );
	sprite.scale.set(100,50,1.0);
	return sprite;
}


function createAGrid(opts){
		var config = opts || {
			height: 500,
			width: 500,
			linesHeight: 10,
			linesWidth: 10,
			color: 0xDD006C
		};

		var material = new THREE.LineBasicMaterial({
			color: config.color,
			opacity: 0.2
		});

		var gridObject = new THREE.Object3D(),
				gridGeo= new THREE.Geometry(),
				stepw = 2*config.width/config.linesWidth,
				steph = 2*config.height/config.linesHeight;

		//width
		for ( var i = - config.width; i <= config.width; i += stepw ) {
				gridGeo.vertices.push( new THREE.Vector3( - config.height, i,0 ) );
				gridGeo.vertices.push( new THREE.Vector3(  config.height, i,0 ) );

		}
		//height
		for ( var i = - config.height; i <= config.height; i += steph ) {
				gridGeo.vertices.push( new THREE.Vector3( i,- config.width,0 ) );
				gridGeo.vertices.push( new THREE.Vector3( i, config.width, 0 ) );
		}

		var line = new THREE.Line( gridGeo, material, THREE.LinePieces );
		gridObject.add(line);

		return gridObject;
}

function gridInit(){

	var boundingGrid = new THREE.Object3D(),
			depth = graphDimensions.w/2, //depth
			width = graphDimensions.d/2, //width
			height = graphDimensions.h/2, //height
			a =data.labels.y.length,
			b= data.labels.x.length,
			c= data.labels.z.length;

	var newGridXY = createAGrid({
				height: width,
				width: height,
				linesHeight: b,
				linesWidth: a,
				color: 0xcccccc
			});
	  		newGridXY.position.z = -depth;
			boundingGrid.add(newGridXY);

	var newGridYZ = createAGrid({
				height: width,
				width: depth,
				linesHeight: b,
				linesWidth: c,
				color: 0xcccccc
			});
	 		newGridYZ.rotation.x = Math.PI/2;
	 		newGridYZ.position.y = -height;
			boundingGrid.add(newGridYZ);

	var newGridXZ = createAGrid({
				height: depth,
				width: height,
				linesHeight:c,
				linesWidth: a,
				color: 0xcccccc
			});

			newGridXZ.position.x = width;
	 		newGridXZ.rotation.y = Math.PI/2;
			boundingGrid.add(newGridXZ);

	glScene.add(boundingGrid);

	var labelsW = labelAxis(width, data.labels.x,"x",data.units.x);
			labelsW.position.x = width+40;
			labelsW.position.y = -height -40;
			labelsW.position.z = depth;
			boundingGrid.add(labelsW);

	var labelsH = labelAxis(height, data.labels.y,"y",data.units.y);
			labelsH.position.x = width;
			labelsH.position.y = - height +(2*height/a)-20;
			labelsH.position.z = depth;
			boundingGrid.add(labelsH);

	var labelsD = labelAxis(depth, data.labels.z, "z",data.units.z);
			labelsD.position.x = width;
			labelsD.position.y = -(height)-40;
			labelsD.position.z = depth-40;
			boundingGrid.add(labelsD);
};




function init() {

  	container = document.getElementById( 'container' );

	vFOVRadians = 2 * Math.atan( windowHeight / ( 2 * 1500 ) );
	fov = 38; 
	startPosition = new THREE.Vector3( 0, 0, 5500 );
	camera = new THREE.PerspectiveCamera( fov, windowWidth / windowHeight, 1, 30000 );
	camera.position.set( startPosition.x, startPosition.y, startPosition.z );


	controls = new THREE.OrbitControls( camera, document.getElementById("container") );
	controls.damping = 0.2;
	controls.addEventListener( 'change', render );

  	glScene = new THREE.Scene();

  	light = new THREE.DirectionalLight( 0xffffff, 0.8 );
  	light.position.set( 0, 1, 1 );
  	glScene.add( light );

  	light2 = new THREE.DirectionalLight( 0xffffff, 0.8 );
  	light2.position.set( 0, 1, -1 );
  	glScene.add( light2 );


  	// create canvas
  	var canvas = document.createElement( 'canvas' );
  	canvas.id = "mycanvas";
    canvas.width = 128;
    canvas.height = 128;

  	var context = canvas.getContext( '2d' );

	gridInit();

	function returnInt (number) {
		return Number(number.replace(/[^0-9\.]+/g,""));
	}

	var positionZ = [];

	for(var z=0; z<50; z++) {
		positionZ.push(z+1);
	}

	function shuffle(array) {
	  var currentIndex = array.length, temporaryValue, randomIndex;

	  // While there remain elements to shuffle...
	  while (0 !== currentIndex) {

	    // Pick a remaining element...
	    randomIndex = Math.floor(Math.random() * currentIndex);
	    currentIndex -= 1;

	    // And swap it with the current element.
	    temporaryValue = array[currentIndex];
	    array[currentIndex] = array[randomIndex];
	    array[randomIndex] = temporaryValue;
	  }

	  return array;
	}

	function returnIndexofKey(dict, key) {
		var index = 0;
		for (var k in dict) {
		    if(k == key) {
		    	return index;
		    }
		    else
		    	index++;
		}
	}

	positionZ = shuffle(positionZ);

	companies = new THREE.Object3D();
	glScene.add( companies );

	twentyseventeen = new THREE.Object3D();
	companies.add( twentyseventeen );

	twentysixteen = new THREE.Object3D();
	companies.add( twentysixteen );

	twentyfifteen = new THREE.Object3D();
	companies.add( twentyfifteen );

	twentyfourteen = new THREE.Object3D();
	companies.add( twentyfourteen );

	twentythirteen = new THREE.Object3D();
	companies.add( twentythirteen );

	var companyArr = [twentyseventeen, twentysixteen, twentyfifteen, twentyfourteen, twentythirteen];

	console.log(realData);
	

	materials = {
		"Accounting & Legal": 0x80b1d5,
		"Aerospace & Defense": 0xfbb463,
		"Biotech & Pharmaceuticals": 0xbebadb,
		"Business Services": 0xf47f71,
		"Construction, Repair & Maintenance": 0xfbef6d,
		"Finance": 0xb3d56a,
		"Government": 0x10ad7b,
		"Health Care": 0xf9f5b6,
		"Information Technology": 0x6a67a9,
		"Insurance": 0xeb2533,
		"Manufacturing": 0xcee6c5,
		"Media": 0x4e7fff,
		"Non-Profit": 0xef592d,
		"Oil, Gas, Energy & Utilities": 0xef7db0,
		"Real Estate": 0x979997,
		"Restaurants, Bars & Food Services": 0x6c3993,
		"Retail": 0x8ed1c5,
		"Telecommunications": 0xfacee1,
		"Transportation & Logistics": 0xbb80b8,
		"Travel & Tourism": 0x6fc077,
		"undefined": 0xdad9d9,
	};

	companyCodes = {
		"Deloitte":"deloitte",
		"BAE Systems":"baeSystems",
		"Boeing":"boeing",
		"General Dynamics":"generalDynamics",
		"L-3 Communications Holdings, Inc":"l3",
		"U.S. Department of Defense":"usDOD",
		"Abbott Laboratories":"abbottLaboratories",
		"Amgen Inc":"amgenInc",
		"Bristol-Myers Squibb":"bristolMyersSquibb",
		"Johnson & Johnson":"johnsonJohnson",
		"Medtronic":"medtronic",
		"Novartis International AG":"novartis",
		"Pfizer":"pfizer",
		"Ernst & Young":"ernstYoung",
		"HCL Global":"hcl",
		"IBM":"ibm",
		"Adecco":"adecco",
		"Robert Half":"robertHalf",
		"Parsons Corporation":"parsons",
		"Bank of America":"bankofAmerica",
		"Capital One":"capitalOne",
		"Wells Fargo":"wellsFargo",
		"Western Union Financial Services":"westernUnion",
		"Citigroup":"citigroup",
		"Citibank":"citibank",
		"Fidelity Investments":"fidelity",
		"GE Capital Bank":"ge",
		"JPMorgan Chase":"jpMorgan",
		"Morgan Stanley":"morganStanley",
		"PNC Financial Services Group, Inc.":"pnc",
		"Prudential":"prudential",
		"Union Bank":"unionBank",
		"Quicken Loans, Inc.":"quickenLoans",
		"NASA":"nasa",
		"Kaiser Permanente":"kaiserPermanente",
		"Merck & Co.":"merckCo",
		"Philips Electronics":"philips",
		"Adobe Systems Incorporated":"adobe",
		"Advanced Micro Devices":"amd",
		"Apple":"apple",
		"Cisco Systems":"cisco",
		"Hewlett-Packard":"hp",
		"Honeywell":"honeywell",
		"Intel":"intel",
		"Intuit, Inc.":"intuit",
		"McAfee":"mcAfee",
		"Microsoft":"microsoft",
		"Qualcomm":"qualcomm",
		"Ricoh":"ricoh",
		"SAP":"sap",
		"Symantec":"symantec",
		"VMware, Inc.":"vmware",
		"General Electric":"generalElectric",
		"Juniper Networks":"juniperNetworks",
		"NetApp":"netApp",
		"Oracle":"oracle",
		"Rackspace US, Inc.":"rackspace",
		"Sabre Holdings":"sabreHoldings",
		"SAIC":"saic",
		"Thomson Reuters":"thomsonReuters",
		"Verizon":"verizon",
		"eBay":"eBay",
		"Google":"google",
		"PayPal":"payPal",
		"Yahoo":"yahoo",
		"Cognizant":"cognizant",
		"Dell":"dell",
		"EMC":"emc",
		"EP Software Technologies":"ep",
		"EPAM Systems":"epam",
		"Genpact Limited":"genpactLimited",
		"MindTree Limited":"mindTreeLimited",
		"Visa, Inc.":"visa",
		"Allstate":"allstate",
		"Anthem":"anthem",
		"Blue Cross Blue Shield Association":"blueCross",
		"CIGNA":"cigna",
		"Farmers Insurance":"farmersInsurance",
		"Metropolitan Life Insurance Company":"metlife",
		"Nationwide Insurance":"nationwide",
		"UnitedHealthcare":"unitedHealthcare",
		"Wellpoint (Anthem)":"wellpoint",
		"3M":"3M",
		"Nike":"nike",
		"Broadcom":"broadcom",
		"Emerson Process Management":"emersonProcess",
		"Flextronics":"flextronics",
		"Schneider Electric":"schneiderElectric",
		"Siemens":"siemens",
		"Texas Instruments":"texasInstruments",
		"PepsiCo":"pepsiCo",
		"Mars, Inc.":"mars",
		"CareFusion":"careFusion",
		"Caterpillar":"caterpillar",
		"Parker Hannifin":"parkerHannifin",
		"United States Steel Corporation":"unitedStatesSteel",
		"Bayerische Motoren Werke AG (BMW)":"bmw",
		"Chrysler":"chrysler",
		"Ford Motor":"ford",
		"General Motors":"generalMotors",
		"Honda Motor":"hondaMotor",
		"Toyota":"toyota",
		"CBS Corporation":"cbs",
		"Walt Disney Company":"disney",
		"Warner Bros. Entertainment, Inc.":"warnerBros",
		"ABC News":"abc",
		"NBCUniversal":"nbc",
		"American Red Cross":"redCross",
		"KBR":"kbr",
		"Chevron Corporation":"chevron",
		"Exxon Mobil Corporation":"exxonMobil",
		"Royal Dutch Shell plc":"royalDutchShell",
		"Keller Williams Realty":"kellerWilliams",
		"RE/MAX International":"remax",
		"Starbucks":"starbucks",
		"Nordstrom, Inc.":"nordstrom",
		"Target":"target",
		"Costco Wholesale Corporation":"costco",
		"CenturyLink, Inc":"centuryLink",
		"Comcast":"comcast",
		"DirecTV":"direcTV",
		"Time Warner Cable":"timeWarnerCable",
		"Nokia":"nokia",
		"Motorola":"motorola",
		"Alcatel-Lucent, Inc.":"alcatel-Lucent",
		"AT&T":"att",
		"Avaya":"avaya",
		"Research In Motion":"researchInMotion",
		"Sprint":"sprint",
		"FedEx":"fedEx",
		"UPS":"ups",
		"Total Quality Logistics":"totalQualityLogistics",
		"American Airlines, Inc":"americanAirlines",
		"United Air Lines, Inc":"unitedAirLines",
		"Enterprise Rent-A-Car":"enterpriseRent-A-Car",
		"Hilton Worldwide":"hiltonWorldwide",
		"Accenture":"accenture",
		"Sony":"sony"
	};

	makeGraph(realData);

	for(var j = 0; j < realData.companies.length; j++) {
		//console.log("hello");
		//console.log(realData.companies[j]);

		for(var i = 0; i < realData.companies[j].length; i++) {

			var geometry = new THREE.SphereGeometry( realData.companies[j][i].SizeCode*10, 24, 24, 0, Math.PI * 2, 0, Math.PI * 2);
			var material = new THREE.MeshLambertMaterial({	color: materials[realData.companies[j][i].SectorName], transparent: true, opacity: 0.4});
			mesh = new THREE.Mesh( geometry, material );
			mesh.position.y = (realData.companies[j][i].BlissScore).map(2.5, 5, 0, graphDimensions.h);
			mesh.position.x = returnInt(realData.companies[j][i].AvgSalary).map(20000,220000, (graphDimensions.d/data.labels.x.length), graphDimensions.d);
			//mesh.position.z = (returnIndexofKey(materials, realData.companies[j][i].SectorName) * graphDimensions.w / data.labels.z.length) + graphDimensions.w / data.labels.z.length;
			mesh.position.z = (positionZ[i] * 45) + 30;
			mesh.userData = { id: ((j*10)+i),year: yearConversion[j], company: realData.companies[j][i].Company, rank: realData.companies[j][i].Rank, lastyear: realData.companies[j][i].LastYear, blissscore: realData.companies[j][i].BlissScore, salary: realData.companies[j][i].AvgSalary, name: realData.companies[j][i].Name, sector: realData.companies[j][i].SectorName, industry: realData.companies[j][i].Industry, revenue: realData.companies[j][i].Revenue, revenuecode: realData.companies[j][i].RevenueCode, size: realData.companies[j][i].Size, sizecode: realData.companies[j][i].SizeCode, type: realData.companies[j][i].Type, inusa: realData.companies[j][i].InUSA, headquarters: realData.companies[j][i].Headquarters, reputationscore: realData.companies[j][i].ReputationScore, reputationrank: realData.companies[j][i].ReputationRank };

			companyArr[j].add( mesh );
			clickable.push(mesh);
		}
	}

	//console.log(twentysixteen.children);

	companies.position.y = companies.position.y - graphDimensions.h/2;
	companies.position.x = companies.position.x - graphDimensions.d/2;
	companies.position.z = companies.position.z - graphDimensions.w/2;

	data.labels.x.length + 1;

	twentyseventeen.traverse( function ( object ) { object.visible = true; } );
	twentysixteen.traverse( function ( object ) { object.visible = false; } );
	twentyfifteen.traverse( function ( object ) { object.visible = false; } );
	twentyfourteen.traverse( function ( object ) { object.visible = false; } );
	twentythirteen.traverse( function ( object ) { object.visible = false; } );

	raycaster = new THREE.Raycaster();
	mouse = new THREE.Vector2();
  	//set up webGL renderer
  	renderer = new THREE.WebGLRenderer();
  	renderer.setPixelRatio( window.devicePixelRatio );
  	renderer.setClearColor( 0xffffff );
  	renderer.setSize( windowWidth, windowHeight);
  	container.appendChild( renderer.domElement );

	document.getElementById("container").addEventListener( 'mousedown', onDocumentMouseDown, false );
	document.getElementById("container").addEventListener( 'touchstart', onDocumentTouchStart, false);


	// set up window resize listener
	window.addEventListener( 'resize', onWindowResize, false );
	animate();

}

function animate() {

	requestAnimationFrame(animate);
	controls.update();
}

function render() {
	camera.lookAt( glScene.position );
	renderer.render( glScene, camera );


}

function onWindowResize() {

	$( "#chartWrap" ).empty();
	makeGraph(realData);

	if (current != null) {
		changeCompany(current);
	}

	windowWidth =  $("#container").innerWidth();

	$("canvas").attr('width', windowWidth);

	camera.aspect = windowWidth / windowHeight;
	camera.updateProjectionMatrix();

	renderer.setSize( windowWidth, windowHeight );
	$("#about").height($(window).height() - $("#container").height() - $("#colors").height() - 15);

	render();

}

function onDocumentTouchStart( event ) {

	event.preventDefault();
	event.clientX = event.touches[0].clientX;
	event.clientY = event.touches[0].clientY;
	onDocumentMouseDown( event );


}

function onDocumentMouseDown( event ) {

	event.preventDefault();

	mouse.x = ( event.clientX / renderer.domElement.clientWidth ) * 2 - 1;
	mouse.y = - ( event.clientY / renderer.domElement.clientHeight ) * 2 + 1;

	raycaster.setFromCamera( mouse, camera );

	var intersects = raycaster.intersectObjects( clickable );

	console.log(event.target);

	if ( intersects.length > 0 ) {
		changeCompany(intersects[0].object);
		current = intersects[0].object;
	}	

	render();
}

function changeCompany(companyObj) {

		$( ".beginning" ).css( "display", "none" );
		selected = companyObj.userData.id;
		$("circle").removeClass("selected");
		$("line").removeClass("selected");
		$( "."+companyCodes[companyObj.userData.company] ).addClass("selected");

		for(var i = 0; i < clickable.length; i++) {
			clickable[ i ].material.opacity = 0.4;
		}
		companyObj.material.opacity = 1;

		$("#currentCompany").text(companyObj.userData.company);

		var aboutString = 
		// "<b>Stats:</b><br><br>"+
        "<h3>"+companyObj.userData.year+" Bliss Ranking: #"+companyObj.userData.rank+" out of 50</h3>"+
        "Average Salary: "+companyObj.userData.salary+"<br>"+
        "Sector: "+companyObj.userData.sector+" <span style=\"color:#"+ (materials[companyObj.userData.sector].toString(16))+"\">&#9724;</span><br>"+
        "Industry: "+companyObj.userData.industry+"<br>"+
        "Size: "+companyObj.userData.size+"<br>"+
        "Headquarters: "+companyObj.userData.headquarters+"<br>";

        var descriptionString = "";

        if(descriptions[companyObj.userData.company].Description != ""){
        	descriptionString += "<b>Description</b>:<br><br>"+descriptions[companyObj.userData.company].Description;
        }
        if(descriptions[companyObj.userData.company].Mission != "") {
        	descriptionString += "<br><br><b>Mission</b>:<br><br>"+descriptions[companyObj.userData.company].Mission;
        }

    	if(descriptions[companyObj.userData.company].GlassdoorAwards != "") {
        	descriptionString += "<br><br><b>Glassdoor Awards</b>:<br><br>"+descriptions[companyObj.userData.company].GlassdoorAwards;
    	}	

        if(companyObj.userData.reputationscore != null) {
        	descriptionString +=  companyObj.userData.year+" Reputation Score: "+companyObj.userData.reputationscore+"<br>"+ companyObj.userData.year+" Reputation Rank: "+companyObj.userData.reputationrank+"<br>";
        }	

        if(descriptions[companyObj.userData.company].Website != "") {
        	descriptionString += "<br><br><b>Website</b>:<br><br><a target=\"_blank\" href=\" http://"+descriptions[companyObj.userData.company].Website +" \">"+descriptions[companyObj.userData.company].Website+"</a>";
    	}	
       

		document.getElementById("aboutText").innerHTML = aboutString;
		document.getElementById("descriptionText").innerHTML = descriptionString;
}


$(".years").bind('click',function(){

	selected = null;

	for(var i = 0; i < clickable.length; i++) {
		clickable[ i ].material.opacity = 0.4;
	}

	document.getElementById("aboutText").innerHTML = "";
	document.getElementById("descriptionText").innerHTML = "";

	if ($(this).attr('id')=="2017"){
		twentyseventeen.traverse( function ( object ) { object.visible = true; } );
		twentysixteen.traverse( function ( object ) { object.visible = false; } );
		twentyfifteen.traverse( function ( object ) { object.visible = false; } );
		twentyfourteen.traverse( function ( object ) { object.visible = false; } );
		twentythirteen.traverse( function ( object ) { object.visible = false; } );
	} else if ($(this).attr('id')=="2016"){
		twentyseventeen.traverse( function ( object ) { object.visible = false; } );
		twentysixteen.traverse( function ( object ) { object.visible = true; } );
		twentyfifteen.traverse( function ( object ) { object.visible = false; } );
		twentyfourteen.traverse( function ( object ) { object.visible = false; } );
		twentythirteen.traverse( function ( object ) { object.visible = false; } );
	} else if ($(this).attr('id')=="2015"){
		twentyseventeen.traverse( function ( object ) { object.visible = false; } );
		twentysixteen.traverse( function ( object ) { object.visible = false; } );
		twentyfifteen.traverse( function ( object ) { object.visible = true; } );
		twentyfourteen.traverse( function ( object ) { object.visible = false; } );
		twentythirteen.traverse( function ( object ) { object.visible = false; } );
	} else if ($(this).attr('id')=="2014"){
		twentyseventeen.traverse( function ( object ) { object.visible = false; } );
		twentysixteen.traverse( function ( object ) { object.visible = false; } );
		twentyfifteen.traverse( function ( object ) { object.visible = false; } );
		twentyfourteen.traverse( function ( object ) { object.visible = true; } );
		twentythirteen.traverse( function ( object ) { object.visible = false; } );
	} else if ($(this).attr('id')=="2013"){
		twentyseventeen.traverse( function ( object ) { object.visible = false; } );
		twentysixteen.traverse( function ( object ) { object.visible = false; } );
		twentyfifteen.traverse( function ( object ) { object.visible = false; } );
		twentyfourteen.traverse( function ( object ) { object.visible = false; } );
		twentythirteen.traverse( function ( object ) { object.visible = true; } );
	}
	render();
});

//---------------------------------------------------------------------------------------------------------------

var makeGraph = function(d) {

	var data = d.companies;

	var margin = {
	    top: 50,
	    right: 40,
	    bottom: 25,
	    left: 70
	  },
	  height = 450 - margin.top - margin.bottom,
	  width = $("#chartWrap").width() - margin.left - margin.right;

	var x = d3.scaleLinear()
	  .domain([2013, 2017])
	  .range([0, width]);

	var y = d3.scaleLinear()
	  .domain([1, 50])
	  //.range([height, 0]) //flip y
	  .range([0, height]);

	var chart = d3.select('#chartWrap')
	  .append('svg:svg')
	  .attr('width', width + margin.right + margin.left)
	  .attr('height', height + margin.top + margin.bottom)
	  .attr('class', 'chart');

	var main = chart.append('g')
	  .attr('transform', 'translate(' + margin.left + ',' + margin.top + ')')
	  .attr('width', width)
	  .attr('height', height)
	  .attr('class', 'main');

	// draw the x axis
	var xAxis = d3.axisTop()
	  .scale(x)
	  .ticks(5)
	  .tickFormat(d3.format("d"));

	main.append("text")
    	.attr("class", "x label")
    	.attr("text-anchor", "end")
    	.attr("x", width/2 +10)
    	.attr("y", -30)
    	.text("Year");

	main.append('g')
	  .attr('transform', 'translate(0,0)') 
	  .attr('class', 'main axis date')
	  .call(xAxis);

	var yAxis = d3.axisLeft()
	  .scale(y)
	  .ticks(10);

	main.append("text")
	    .attr("text-anchor", "end")
	    .attr("y", -50)
	    .attr("x", -140)
	    .attr("dy", ".75em")
	    .attr("transform", "rotate(-90)")
	    .text("Bliss Score Ranking");

	main.append('g')
	  .attr('transform', 'translate(0,0)')
	  .attr('class', 'main axis date')
	  .call(yAxis);

	var g = main.append("svg:g");


	for(var j = 0; j < yearConversion.length; j++ ){

		if(yearConversion[j] != 2013) {
			g.selectAll("lines")
			   	.data(data[j])
			   	.enter().append("line")
				.attr("x1", function(d){
					if(d.LastYear != "--"){
						return x(yearConversion[j]);
					}
				})
				.attr("y1", function(d){
					if(d.LastYear != "--"){
						return y(d.Rank);
					}
				})
				.attr("x2", function(d){
					if(d.LastYear != "--"){
						return x(yearConversion[j+1]);
					}
				})
				.attr("y2", function(d){
					if(d.LastYear != "--"){
						return y(d.LastYear);
					}
				})
				.attr("stroke-width", 1)
		        .attr("stroke", "black")
		        .attr("class",function(d){return companyCodes[d.Company]});
		}

		g.selectAll("scatter-dots")
		  .data(data[j])
		  .enter().append("svg:circle")
		  .attr("class",function(d){return "dots " + companyCodes[d.Company]})
		  .style("fill", function(d) { 
		  	//console.log(d.SectorName);
		  	if(materials[d.SectorName] != undefined){
		  		return materials[d.SectorName].toString(16);
		  	}
		  })
		  .attr("cx", function(d) {
		  	//console.log(data[j]);
		    return x(yearConversion[j]);
		  })
		  .attr("cy", function(d,i) {
		  	//console.log(d);
		    return y(d.Rank);
		  })
		  .attr("r", 4)
		  .attr("companyID",function(d,i){
		  	return (j*50)+(i+1);
		  })
		  .attr("year",function(d,i){
		  	return yearConversion[j];
		  })
		  .append("svg:title")
	   	.text(function(d) { return d.Name; });

	}
}


$( ".view" ).change(function() {

	if($('.view').find(":selected").text() == "Perspective") {
			console.log("camera three");
  			controls.reset();
  			camera.fov = 38;
			camera.updateProjectionMatrix();
			render();	
	
	} 

	if ($('.view').find(":selected").text() == "Orthographic Front") {
	
			console.log("front");
			controls.reset()	
			var vFOVRadians = 2 * Math.atan( windowHeight / ( 2 * 35000 ) ),
			fov = vFOVRadians * 180 / Math.PI;
			camera.fov = fov;
			camera.position.z = startPosition.z* 40;
			camera.far = 1000000;
			camera.updateProjectionMatrix();
		
	} 

	if ($('.view').find(":selected").text() == "Orthographic Top") {
		
			console.log("top");
			controls.reset()	
			var vFOVRadians = 2 * Math.atan( windowHeight / ( 2 * 35000 ) ),
			fov = vFOVRadians * 180 / Math.PI;
			camera.fov = fov;
			camera.position.z = startPosition.z* 40;
			camera.far = 1000000;
			camera.updateProjectionMatrix();
			controls.rotateUp(90*Math.PI/180);
		 
	} 

	if ($('.view').find(":selected").text() == "Orthographic Side") {
			console.log("side");
			controls.reset()	
			var vFOVRadians = 2 * Math.atan( windowHeight / ( 2 * 35000 ) ),
			fov = vFOVRadians * 180 / Math.PI;
			camera.fov = fov;
			camera.position.z = startPosition.z - 7500;
			camera.position.x = startPosition.z* 40;
			camera.far = 1000000;
			camera.updateProjectionMatrix();

	}

	render();
	
});

$( ".yearDrop" ).change(function() {

	document.getElementById("aboutText").innerHTML = "";
	document.getElementById("descriptionText").innerHTML = "";
	$("#currentCompany").text("");
	$("circle").removeClass("selected");
	$("line").removeClass("selected");

	if ($('.yearDrop').find(":selected").text()=="2017"){
		twentyseventeen.traverse( function ( object ) { object.visible = true; } );
		twentysixteen.traverse( function ( object ) { object.visible = false; } );
		twentyfifteen.traverse( function ( object ) { object.visible = false; } );
		twentyfourteen.traverse( function ( object ) { object.visible = false; } );
		twentythirteen.traverse( function ( object ) { object.visible = false; } );
	} else if ($('.yearDrop').find(":selected").text()=="2016"){
		twentyseventeen.traverse( function ( object ) { object.visible = false; } );
		twentysixteen.traverse( function ( object ) { object.visible = true; } );
		twentyfifteen.traverse( function ( object ) { object.visible = false; } );
		twentyfourteen.traverse( function ( object ) { object.visible = false; } );
		twentythirteen.traverse( function ( object ) { object.visible = false; } );
	} else if ($('.yearDrop').find(":selected").text()=="2015"){
		twentyseventeen.traverse( function ( object ) { object.visible = false; } );
		twentysixteen.traverse( function ( object ) { object.visible = false; } );
		twentyfifteen.traverse( function ( object ) { object.visible = true; } );
		twentyfourteen.traverse( function ( object ) { object.visible = false; } );
		twentythirteen.traverse( function ( object ) { object.visible = false; } );
	} else if ($('.yearDrop').find(":selected").text()=="2014"){
		twentyseventeen.traverse( function ( object ) { object.visible = false; } );
		twentysixteen.traverse( function ( object ) { object.visible = false; } );
		twentyfifteen.traverse( function ( object ) { object.visible = false; } );
		twentyfourteen.traverse( function ( object ) { object.visible = true; } );
		twentythirteen.traverse( function ( object ) { object.visible = false; } );
	} else if ($('.yearDrop').find(":selected").text()=="2013"){
		twentyseventeen.traverse( function ( object ) { object.visible = false; } );
		twentysixteen.traverse( function ( object ) { object.visible = false; } );
		twentyfifteen.traverse( function ( object ) { object.visible = false; } );
		twentyfourteen.traverse( function ( object ) { object.visible = false; } );
		twentythirteen.traverse( function ( object ) { object.visible = true; } );
	}
	render();
});


$("#chartWrap").click(function(){
	if($(event.target).hasClass('dots')) {
		$("circle").removeClass("selected");
		$("line").removeClass("selected");
		
		var comp =event.target.className.baseVal.split(' ')[1];
		$("."+comp).addClass("selected");
		console.log(event.target.getAttribute('year'));
		$(".yearDrop ").val(event.target.getAttribute('year'));
		$( ".yearDrop" ).change();
		selected = parseInt(event.target.getAttribute('companyID'))-1;
		changeCompany(clickable[ selected ]);
		render();
	}
});

$("#about").height($(window).height() - $("#container").height() - $("#colors").height() - 15);




