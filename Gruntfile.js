module.exports = function(grunt) {
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-compass');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.initConfig({
    jshint: {
     all: ['_/js/*.js']
       }, //jshint
    compass: {
      dev: {
        options: {
          config: 'config.rb'
        }//options
      }//dev
    }, //compass
    uglify: {
      my_target: {
        files: {
          'js/script.js': ['_/js/*.js']
        }//files
      }//my_target
    } ,//uglify
    watch: {
      sass:    {
        files: ['_/sass/app.scss'] , 
        tasks: ['compass:dev']
      },//sass
      scripts: {
        files: ['_/js/*.js'],
        tasks: ['uglify', 'jshint'] ,
      }//scripts
    }//watch
  })//grunt initConfig
   grunt.registerTask('default', ['watch']);
}//exports

