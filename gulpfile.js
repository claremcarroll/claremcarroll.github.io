 var gulp = require('gulp'),  
    handlebars = require('gulp-compile-handlebars'),
    rename = require('gulp-rename'),
    fs = require('fs'),
    proj = require('./js/projects.json'),
    visualdesign = require('./js/visualdesign.json'),
    uxdesign = require('./js/uxdesign.json'),
    development = require('./js/development.json'),
    otherprojects = require('./js/otherprojects.json'),
    debug = require('gulp-debug'),
    Feed = require('rss-to-json');


// Feed.load('https://clarenews.tumblr.com/rss', function(err, rss){
//     var myFeed = rss;
//        fs.writeFile('js/news-gen.json', JSON.stringify(myFeed), rss);
// }); 

// gulp.task('handlebars', function() {

// //  console.log(projects.projects[0]);

//   for(var i=0; i<proj.projects.length; i++) {
//         var project = proj.projects[i],
//             fileName = project.name.replace(/ +/g, '-').toLowerCase();

//         if(i != 0) {
//             var prev = proj.projects[i-1].name.replace(/ +/g, '-').toLowerCase() + ".html";
//             project.previous = prev;
//         }

//         if(i != proj.projects.length-1){
//             var next = proj.projects[i+1].name.replace(/ +/g, '-').toLowerCase() + ".html";
//             project.next = next;
//         }

//         gulp.src('templates/*.handlebars')
//             .pipe(handlebars(project))
//             .pipe(rename(fileName + ".html"))
//             .pipe(gulp.dest('projects'));
//     }

// });

gulp.task('handlebars', function() {

//  console.log(projects.projects[0]);

  for(var i=0; i<visualdesign.projects.length; i++) {

        

        var project = visualdesign.projects[i],
            fileName = project.name.replace(/ +/g, '-').toLowerCase();

        project.section = "<a href=\"../visualdesign.html\">VISUAL DESIGN PROJECTS</a>";

        if(i != 0) {
            var prev = visualdesign.projects[i-1].name.replace(/ +/g, '-').toLowerCase() + ".html";
            project.previous = prev;
        }

        if(i != visualdesign.projects.length-1){

            if(visualdesign.projects[i+1].name != "") {
                var next = visualdesign.projects[i+1].name.replace(/ +/g, '-').toLowerCase() + ".html";
                project.next = next;
            }
            
        }

        gulp.src('templates/*.handlebars')
            .pipe(handlebars(project))
            .pipe(rename(fileName + ".html"))
            .pipe(gulp.dest('projects'));
    }

    for(var i=0; i<uxdesign.projects.length; i++) {

        

        var project = uxdesign.projects[i],
            fileName = project.name.replace(/ +/g, '-').toLowerCase();

        project.section = "<a href=\"../uxdesign.html\">UX DESIGN PROJECTS</a>";

        if(i != 0) {
            var prev = uxdesign.projects[i-1].name.replace(/ +/g, '-').toLowerCase() + ".html";
            project.previous = prev;
        }

        if(i != uxdesign.projects.length-1){
            if(uxdesign.projects[i+1].name != "") {
                var next = uxdesign.projects[i+1].name.replace(/ +/g, '-').toLowerCase() + ".html";
                project.next = next;
            }
        }

        gulp.src('templates/*.handlebars')
            .pipe(handlebars(project))
            .pipe(rename(fileName + ".html"))
            .pipe(gulp.dest('projects'));
    }

    for(var i=0; i<development.projects.length; i++) {

        
        var project = development.projects[i],
            fileName = project.name.replace(/ +/g, '-').toLowerCase();


        project.section = "<a href=\"../development.html\">DEVELOPMENT PROJECTS</a>";

        if(i != 0) {
            var prev = development.projects[i-1].name.replace(/ +/g, '-').toLowerCase() + ".html";
            project.previous = prev;
        }

        if(i != development.projects.length-1){
            if(development.projects[i+1].name != "") {
                var next = development.projects[i+1].name.replace(/ +/g, '-').toLowerCase() + ".html";
                project.next = next;
            }
            
        }

        gulp.src('templates/*.handlebars')
            .pipe(handlebars(project))
            .pipe(rename(fileName + ".html"))
            .pipe(gulp.dest('projects'));
    }

    for(var i=0; i<otherprojects.projects.length; i++) {
        var project = otherprojects.projects[i],
            fileName = project.name.replace(/ +/g, '-').toLowerCase();

        if(i != 0) {
            var prev = otherprojects.projects[i-1].name.replace(/ +/g, '-').toLowerCase() + ".html";
            project.previous = prev;
        }

        if(i != otherprojects.projects.length-1){
            var next = otherprojects.projects[i+1].name.replace(/ +/g, '-').toLowerCase() + ".html";
            project.next = next;
        }

        gulp.src('templates/*.handlebars')
            .pipe(handlebars(project))
            .pipe(rename(fileName + ".html"))
            .pipe(gulp.dest('projects'));
    }

});



gulp.task('default', ['handlebars']);