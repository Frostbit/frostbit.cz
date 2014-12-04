module.exports = function(grunt) {
  "use strict";

  // Nastaveni tasku
  grunt.initConfig({

    less: {
      main: {
        files: {
          'web/css/main.css': 'web/css/main.less'
        },
      }
    },

    uglify: {
      head: {
          src: 'web/js/main.js',
          dest: 'web/js/main.min.js'
      },           
    },

    autoprefixer: {
      options: {
        browsers: ['last 3 versions', 'ios 6', 'ie 7', 'ie 8', 'ie 9']
      },
      files: {
        src: 'web/css/main.css',
        dest: 'web/css/main.css'
      },
    },

    cssmin: {
      options: {
        banner: '<%= banner %>'
      },
      files: {
        src: 'web/css/main.css',
        dest: 'web/css/main.css'
      }
    },

  });


  // Pluginy
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-autoprefixer');

  // Hlavni tasky
  grunt.registerTask('css', ['less', 'autoprefixer', 'cssmin']);
  grunt.registerTask('js', ['uglify']);

};