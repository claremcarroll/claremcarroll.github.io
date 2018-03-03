// window.onload = function() {

// GLOBAL VARIABLES

  var scene, renderer, camera;
  var controls;
  var tetGeometry = new THREE.TetrahedronGeometry(1);
  var tet = new Array(5);
  var fit = new THREE.Object3D();
  var thescene;
  var lightHolder;
  var latheMesh;
  var ornaments = [];
  var ornamentTextures = [];
  var radius = 20;
  var raycaster = new THREE.Raycaster();
  var mouse = new THREE.Vector2();
  var mousePressed = false;
  var keyMode = false;
  var pano;
  var banner;
  var presentHolder;
  var hover = false;
  var objects;
  var currentTex = 0;
  var presents;
  var bow1, bow2, bow3;
  var particleSystemHeight = 100;
  var treeScale = 0.2;
  var treesvg;
  var loader = new THREE.TextureLoader();

// LOAD AUDIO

  var audio1 = document.createElement('audio');
  var source1 = document.createElement('source');
  source1.src = 'music/1.mp3';
  audio1.appendChild(source1);
  audio1.play();

  var audio2 = document.createElement('audio');
  var source2 = document.createElement('source');
  source2.src = 'music/2.mp3';
  audio2.appendChild(source2);

  var audio3 = document.createElement('audio');
  var source3 = document.createElement('source');
  source3.src = 'music/3.mp3';
  audio3.appendChild(source3);

//SVG PARSER

  function parseSVG(svg) {
     var points = [];
     var svgstr = svg;
     var split1 = svgstr.split("<");
      var firstLine = split1[4];
      var formula = /points="([^']*)"/;
      var matched = formula.exec(firstLine)[1];
      matched = matched.split(" ");
      for(i in matched) {
        var split = matched[i].split(",");
        if(split.length == 2) {
          var point = new THREE.Vector3(parseInt(split[0]), parseInt(split[1]), 0);
          points.push(point);
        }
      }
    return points;
    console.log(points);
  }

// IMAGE LOADER

  function loadTexture(img) {
    var tex = loader.load(img);
    return tex;
  }

// SVG LOADER

  $.get("tree.svg", function(svg){
    treesvg = svg;
    init();
    animate();
  }, 'text');

  function init() {

    renderer = new THREE.WebGLRenderer({ antialias: true  });
    var width = window.innerWidth;
    var height = window.innerHeight;
    renderer.setSize(width, height);
    document.body.appendChild(renderer.domElement);

    scene = new THREE.Scene();
    thescene = new THREE.Object3D();
    thescene.position.y = -50;
    scene.add(thescene);

//LIGHTS

    lightHolder = new THREE.Object3D();
    thescene.add( lightHolder );
    var spiral1 = new THREE.Line( new THREE.Geometry(), new THREE.LineBasicMaterial());
    var spiral2 = new THREE.Line( new THREE.Geometry(), new THREE.LineBasicMaterial());
    var spiral3 = new THREE.Line( new THREE.Geometry(), new THREE.LineBasicMaterial());
    for (i = 200; i < 500; i++) {

    angle1 = 0.037 * i;
    x1 = 0 + (1 + 1 * angle1) * Math.cos(angle1);
    z1 = 0 + (1 + 1 * angle1) * Math.sin(angle1);
    y1 = 94 - (i/16);
    spiral1.geometry.vertices.push(new THREE.Vector3(x1, y1, z1));

    angle2 = 0.048 * i;
    x2 = 0 + (1 + 1 * angle2) * Math.cos(angle2);
    z2 = 0 + (1 + 1 * angle2) * Math.sin(angle2);
    y2 = 72 - (i/16);
    spiral2.geometry.vertices.push(new THREE.Vector3(x2, y2, z2));

    angle3 = 0.05 * i;
    x3 = 0 + (1 + 1 * angle3) * Math.cos(angle3);
    z3 = 0 + (1 + 1 * angle3) * Math.sin(angle3);
    y3 = 50 - (i/16);
    spiral3.geometry.vertices.push(new THREE.Vector3(x3, y3, z3));

    if(i % 11 == 0){
        //add
        var geometry = new THREE.SphereGeometry(0.7, 50, 50);
        var material = new THREE.MeshBasicMaterial({color:0xffd757, transparent: true});
        var light1 = new THREE.Mesh(geometry, material);
        light1.position.set(x1,y1,z1);
        lightHolder.add(light1);

        var light2 = new THREE.Mesh(geometry, material);
        light2.position.set(x2,y2,z2);
        lightHolder.add(light2);

        var light3 = new THREE.Mesh(geometry, material);
        light3.position.set(x3,y3,z3);
        lightHolder.add(light3);

        var rand = Math.random() * (3000 - 500) + 500;

        var tween1 = new TWEEN.Tween(light1.material).to( {opacity: 0.1} , rand).start();
        tween1.easing(TWEEN.Easing.Sinusoidal.InOut);
        tween1.repeat(Infinity); 
        tween1.yoyo(true);

    }
  }
    
// PRESENTS

  presentHolder = new THREE.Object3D();
  thescene.add( presentHolder );

  function presentRotate( obj, angles, delay, pause ) {
    new TWEEN.Tween(obj.rotation)
          .delay(pause)
          .to( {
                  x: obj.rotation._x + angles.x,            
                  y: obj.rotation._y + angles.y,
                  z: obj.rotation._z + angles.z            
              }, delay )
          .onComplete(function() {
                  setTimeout( presentRotate, pause, obj, angles, delay, pause );
              })
          .start();
  }

  function bowAnimate(obj) {
    var tween = new TWEEN.Tween(obj.position).to({ x: obj.position.x, y: (obj.position.y + 1), z: obj.position.z }, 1000).start();
          tween.easing(TWEEN.Easing.Elastic.InOut);
          tween.repeat(Infinity); 
          tween.yoyo(true);
  }

  function makeLambertMaterial(img) {
    return new THREE.MeshLambertMaterial({ map: loadTexture(img), transparent:true });
  }

  function addPresents() {

      present1materials = [];
      present1materials.push(makeLambertMaterial('images/present2.jpg'));
      present1materials.push(makeLambertMaterial('images/present2.jpg'));
      present1materials.push(makeLambertMaterial('images/present1.jpg'));
      present1materials.push(makeLambertMaterial('images/present1.jpg'));
      present1materials.push(makeLambertMaterial('images/present2.jpg'));
      present1materials.push(makeLambertMaterial('images/present2.jpg'));

  		present1 = new THREE.Mesh(
  		  new THREE.BoxGeometry( 15, 8, 20, 1, 1, 1 ),
  		  new THREE.MeshFaceMaterial( present1materials ) );
  		present1.position.set(50, 4, 0);
  		present1.name = "present1";
  		presentHolder.add( present1 );

    	var bow1geometry = new THREE.TorusKnotGeometry( 2, 0.6, 100, 16, 2, 7 );
  		var bow1material = new THREE.MeshLambertMaterial( { color: 0x6364AD, transparent: true} );
  		bow1 = new THREE.Mesh( bow1geometry, bow1material );
  		bow1.position.set(50,10,0);
  		bow1.rotation.x = Math.PI / 2;
  		bow1.name = "bow1";
  		thescene.add( bow1 );
    
  		present2materials = [];
      present2materials.push(makeLambertMaterial('images/present4.jpg'));
      present2materials.push(makeLambertMaterial('images/present4.jpg'));
      present2materials.push(makeLambertMaterial('images/present3.jpg'));
      present2materials.push(makeLambertMaterial('images/present3.jpg'));
      present2materials.push(makeLambertMaterial('images/present4.jpg'));
      present2materials.push(makeLambertMaterial('images/present4.jpg'));

    	present2 = new THREE.Mesh(
  		  new THREE.BoxGeometry( 12, 12, 12, 1, 1, 1 ),
  		  new THREE.MeshFaceMaterial( present2materials ) );
  		present2.position.set(-35, 6, -35);
  		present2.name = "present2";
  		presentHolder.add( present2 );

  		var bow2geometry = new THREE.TorusKnotGeometry( 2, 0.5, 100, 16, 4, 3 );
  		var bow2material = new THREE.MeshLambertMaterial( { color: 0x496C32, transparent: true} );
  		bow2 = new THREE.Mesh( bow2geometry, bow2material );
  		bow2.position.set(-35,13,-35);
  		bow2.rotation.x = Math.PI / 2;
  		bow2.name = "bow2";
  		thescene.add( bow2 );

  		present3materials = [];
      present3materials.push(makeLambertMaterial('images/present6.png'));
      present3materials.push(makeLambertMaterial('images/present6.png'));
      present3materials.push(makeLambertMaterial('images/present5.png'));
      present3materials.push(makeLambertMaterial('images/present5.png'));
      present3materials.push(makeLambertMaterial('images/present6.png'));
      present3materials.push(makeLambertMaterial('images/present6.png'));

    	present3 = new THREE.Mesh(
  		new THREE.BoxGeometry( 14, 14, 14, 1, 1, 1 ),
  		new THREE.MeshFaceMaterial( present3materials ) );
  		present3.position.set(-35, 7, 35);
  		present3.name = "present3";
  		presentHolder.add( present3 );

  		var bow3geometry = new THREE.TorusKnotGeometry( 3, 0.3, 100, 16, 2, 14);
  		var bow3material = new THREE.MeshLambertMaterial( { color: 0xffffff, transparent: true} );
  		bow3 = new THREE.Mesh( bow3geometry, bow3material );
  		bow3.position.set(-35,16,35);
  		bow3.rotation.x = Math.PI / 2;
  		bow3.name = "bow3";
  		thescene.add( bow3 );

      presentRotate(present1, {x:0,y:-Math.PI/2,z:0}, 1000, 500 );
      presentRotate(present2, {x:0,y:-Math.PI/2,z:0}, 1000, 500 );
      presentRotate(present3, {x:0,y:-Math.PI/2,z:0}, 1000, 500 );

      bowAnimate(bow1);
      bowAnimate(bow2);
      bowAnimate(bow3);

  	}

  	addPresents();

//PANORAMA

    loader.load('images/1.jpg', onTextureLoaded);

    function onTextureLoaded(texture) {
  	  var geometry = new THREE.SphereGeometry(1000, 32, 32);
  	  var material = new THREE.MeshBasicMaterial({ map: texture, side: THREE.BackSide });
  	  pano = new THREE.Mesh(geometry, material);
  	  pano.position.y = 190;
  	  scene.add(pano);
  	}
  	

// TREE

    function makeTree() {

      var points = parseSVG(treesvg);
      console.log(points);

      // tree

      var latheGeometry = new THREE.LatheGeometry(points, 30, 0, 6.3);
      var material = new THREE.MeshLambertMaterial({transparent: true})
      material.map  = loadTexture('images/treetex.png');
      latheMesh = new THREE.Mesh(latheGeometry, material);

      latheMesh.scale.set(treeScale, treeScale, treeScale);
      latheMesh.rotation.x = Math.PI;
      thescene.add(latheMesh);

    }

    makeTree();

//ORNAMENTS

    function Ornament(mesh, angle) {
      this.mesh = mesh;
      this.angle = angle;
      this.rotationDir;
      this.direction;
      this.speed;
      this.height;
      this.radius;
    }

    ornamentHolder = new THREE.Object3D();
    thescene.add( ornamentHolder );

    function makeOrnaments() {
    	for (var i = 1; i < 11; i++) {

        var angle;    		
    		var height;

        if(i < 6) {
          var geometry = new THREE.SphereGeometry(6, 32, 32);
          var map  = loadTexture('images/'+i+'.jpg');
          ornamentTextures.push(map);
          var material = new THREE.MeshLambertMaterial( { map: map, transparent: true } );
          var ornMesh = new THREE.Mesh(geometry, material);
          angle = ((Math.PI*2) / 5) * i;
          var orn = new Ornament(ornMesh,angle);
          orn.height = 25;
          orn.rotationDir = 0;
          orn.direction = 0;
          orn.radius = 25;
        } else {
          var geometry = new THREE.SphereGeometry(5, 32, 32);
          var map  = loadTexture('images/'+i+'.jpg');
          ornamentTextures.push(map);
          var material = new THREE.MeshLambertMaterial( { map: map, transparent: true } );
          var ornMesh = new THREE.Mesh(geometry, material);
          angle = (Math.PI*2 / 5) * (i-5);
          var orn = new Ornament(ornMesh,angle);
          orn.height = 50;
          orn.rotationDir = 1;
          orn.direction = 1;
          orn.radius = 22;
        }
  	    
  	    orn.speed = 0.005;

        var x = Math.cos(angle)*orn.radius;
        var y = Math.sin(angle)*orn.radius;

  	    ornMesh.position.set(x, orn.height, y);

  	    ornaments.push(orn);

  	    ornamentHolder.add(ornaments[i-1].mesh);

    	}
      
    }

    makeOrnaments();

// STAR

    var t = ((1 + Math.sqrt(5)) / 2);
    var fturn = 6.283 / 5;
    var axis = new THREE.Vector3(t, 1, 0);
    axis.normalize();
    for (var i = 0; i < 5; i++) {
    	var material = new THREE.MeshLambertMaterial();
    	material.map  = loadTexture('images/glitter.jpg');
      tet[i] = new THREE.Mesh(tetGeometry, material);
      tet[i].rotateOnAxis(axis, i * fturn);
      fit.add(tet[i]);
    }
    fit.position.set(0, 95, 0);
    fit.scale.set(10, 10, 10);
    thescene.add(fit);

// CAMERA

    camera = new THREE.PerspectiveCamera(45, width / height, 1, 10000);
    camera.position.y = 0;
    camera.position.z = 500;
    camera.lookAt(new THREE.Vector3(0, 0, 0));

    controls = new THREE.OrbitControls(camera, renderer.domElement);

// FLOOR

    function makeFloor() {
    	var geometry = new THREE.PlaneBufferGeometry( 150, 150, 32 );
  	  var map = loadTexture('images/floor.png');
  	  var material = new THREE.MeshBasicMaterial( {map: map, side: THREE.SingleSide, transparent: true } );
  	  var floor = new THREE.Mesh( geometry, material );
  	  floor.rotation.x = -(Math.PI / 2);
  	  thescene.add( floor );
    }

    makeFloor();

// BANNER

    function makeBanner() {
    	var geometry = new THREE.PlaneBufferGeometry( 100, 60, 32 );
  	  var map = loadTexture('images/banner.png');
  	  var material = new THREE.MeshBasicMaterial( {map: map, side: THREE.SingleSide, transparent: true } );
  	  banner = new THREE.Mesh( geometry, material );
  	  banner.position.set(0, 140, 0);
  	  thescene.add( banner );
    }
    
    makeBanner();

// LIGHTS

    var pointLight = new THREE.PointLight(0xffffff);
    pointLight.position.set(0, 300, 200);
    scene.add(pointLight);

    var light = new THREE.AmbientLight(0x404040);
    scene.add(light);
    var light2 = new THREE.PointLight(0xffffff, 1, 100);
    light2.intensity = 1;
    scene.add(light2);
    var light3 = new THREE.DirectionalLight(0xffffff);
    light3.position.set(0, 1, 1).normalize();
    scene.add(light3);

    window.addEventListener('resize', onWindowResize, false);
    document.addEventListener( 'mousemove', onDocumentMouseMove, false );
  	document.addEventListener( 'mousedown', onDocumentMouseDown, false );    
  	document.addEventListener( 'mouseup', onDocumentMouseUp, false ); 
  }

// MOUSE EVENTS


  document.onkeydown = checkKey;

  function checkKey(e) {

      e = e || window.event;

      if (e.keyCode == '37') {
         // left arrow
         if (keyMode == false) {
          keyMode = true;
          pano.material.map = ornamentTextures[1];
          currentTex = 1;
         }
         else if(keyMode == true) {
          if(currentTex == 0) {
            pano.material.map = ornamentTextures[9];
            currentTex = 9;
          } else {
            currentTex--;
            pano.material.map = ornamentTextures[currentTex];
          }

         }
      }
      else if (e.keyCode == '39') {
         // right arrow
         if (keyMode == false) {
          keyMode = true;
          pano.material.map = ornamentTextures[9];
          currentTex = 9;
         } 
         else if(keyMode == true) {
          if(currentTex == 9) {
            pano.material.map = ornamentTextures[0];
            currentTex = 0;
          } else {
            currentTex++;
            pano.material.map = ornamentTextures[currentTex];
          }

         }
      }

  }

  function onDocumentMouseDown( event ) { mousePressed = true; }

  function onDocumentMouseUp( event ) { mousePressed = false;  

    // if we mouse up over an ornament, change the pano
  	if(objects[0] != undefined) {
      keyMode = false;
      pano.material.map = objects[0].object.material.map;
    }

    // if we mouse up over a present, stop current song and play new song
    if(presents[0] != undefined) {
    	if(presents[0].object.name == "present1") {
    		audio2.pause();
    		audio3.pause();
    		audio1.currentTime = 0;
    		audio1.play();
    	} else if(presents[0].object.name == "present2") {
    		audio1.pause();
    		audio3.pause();
    		audio2.currentTime = 0;
    		audio2.play();
    	} else if(presents[0].object.name == "present3") {
    		audio1.pause();
    		audio2.pause();
    		audio3.currentTime = 0;
    		audio3.play();
    	}
    }
  }

  function onDocumentMouseMove( event ) {

    mouse.x = ( event.clientX / window.innerWidth ) * 2 - 1;
  	mouse.y = - ( event.clientY / window.innerHeight ) * 2 + 1;
    raycaster.setFromCamera( mouse.clone(), camera );   
      
    objects = raycaster.intersectObjects(ornamentHolder.children);
    presents = raycaster.intersectObjects(presentHolder.children);
    
    var o = [];
    if (objects.length>0) {
    	hover = true;
      for (var i in objects) {
         if (objects[i].object.userData.verticeIndex) {
              o.push(objects[i].object.userData.verticeIndex);
         }
      }
      o = o.length>0 ? o[0] : -1;
    } else {
    	hover = false;
      o = -1;
    } 

    activeCell = (o>=0) ? true : false;

    if (!mousePressed) {

      // on hover, change ornament opacity
    	
    	if(objects[0] != undefined) {
    		objects[0].object.material.opacity = 0.5;
        var scaleup = new TWEEN.Tween(objects[0].object.scale).to( {x: 1.1, y:1.1, z:1.1} , 500).start();
        scaleup.easing(TWEEN.Easing.Quartic.Out);
    	} else {
    		for(var i in ornamentHolder.children) {
    			if(ornamentHolder.children[i].material.opacity == 0.5) {
    				ornamentHolder.children[i].material.opacity = 1;
            var scaledown = new TWEEN.Tween(ornamentHolder.children[i].scale).to( {x: 1, y:1, z:1} , 500).start();
            scaledown.easing(TWEEN.Easing.Quartic.Out);
    			}	
    		}
    	}
  	
      // on hover, change box and bow opacity

      if(presents[0] != undefined) {

      	if (presents[0].object.name == "present1") {
      		bow1.material.opacity = 0.5;
      	} else if (presents[0].object.name == "present2") {
      		bow2.material.opacity = 0.5;
      	} else if (presents[0].object.name == "present3") {
      		bow3.material.opacity = 0.5;
      	}

      	for(var i in presents[0].object.material.materials) {
      		presents[0].object.material.materials[i].opacity = 0.5;
      	}

      } else {

      	if(bow1.material.opacity == 0.5 ){
      		bow1.material.opacity = 1;
      	} else if(bow2.material.opacity == 0.5 ){
      		bow2.material.opacity = 1;
      	} else if(bow3.material.opacity == 0.5 ){
      		bow3.material.opacity = 1;
      	}

      	for(var i in presentHolder.children) {
  	   		for(var j in presentHolder.children[i].material.materials) {
  	   			if(presentHolder.children[i].material.materials[j].opacity == 0.5){
  	   				presentHolder.children[i].material.materials[j].opacity = 1;
  	   			}	
  	   		}
  	   	}
      }
    } 
  }

// WINDOW RESIZE

  function onWindowResize() {
    camera.aspect = window.innerWidth / window.innerHeight;
    camera.updateProjectionMatrix();
    renderer.setSize(window.innerWidth, window.innerHeight);
  }

// ANIMATE

  function animate() {
    TWEEN.update();
    // Apply rotation
    fit.rotation.y += 0.01;
    fit.rotation.x += 0.008;

    banner.lookAt( camera.position );

    // rotate ornaments if no hover

    if(!hover) {

    	for(var i = 0; i < ornaments.length; i++) {

  	  	if(ornaments[i].direction == 0) {
  	  		ornaments[i].angle += ornaments[i].speed;
  	  	} else {
  	  		ornaments[i].angle -= ornaments[i].speed;
  	  	}

  	  	var x = Math.cos(ornaments[i].angle)*ornaments[i].radius;
  		  var y = Math.sin(ornaments[i].angle)*ornaments[i].radius;

  	  	ornaments[i].mesh.position.set(x, ornaments[i].height, y);

  	  	if(ornaments[i].rotationDir == 0) {
  	  		ornaments[i].mesh.rotation.y += 0.01;
  	  	} else {
  	  		ornaments[i].mesh.rotation.y -= 0.01;
  	  	}
  	  }
    }

    controls.update();
    renderer.render(scene, camera);
    requestAnimationFrame(animate);
  } 

// };