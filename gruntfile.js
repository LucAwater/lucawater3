module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    criticalcss: {
      home : {
        options: {
          url: "https://lucawater.nl",
          width: 1200,
          height: 900,
          outputfile: "content/themes/elements/css/app-critical.css",
          filename: "content/themes/elements/css/app.css",
          buffer: 800*1024
        }
      }
    }
  });

  grunt.loadNpmTasks('grunt-criticalcss');

};