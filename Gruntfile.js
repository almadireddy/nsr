module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    uglify: {
      options: {
        banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
      },
      build: {
        options: {
          mangle: false
        },
        files: {
          'build/wp-content/themes/nsr/js/scripts.js' : ['src/js/*.js']
        }
      }
    },
    sass: {
      dist: {
        options: {
          style: 'expanded'
        },
        files: {
          'build/wp-content/themes/nsr/css/main.css': 'src/sass/main.sass'
        }
      }
    },

    watch: {
      sass: {
        files: 'src/sass/**/*.sass',
        tasks: ['sass'],
        options: {
          livereload: true
        }
      },
      scripts: {
        files: ['src/js/*.js'],
        tasks: ['uglify'],
        livereload: true
      },
      markup: {
        files: ['build/*.php'],
        options: {
          livereload: true
        }
      }
    },

    browserSync: {
      dev: {
        bsFiles: {
          src : [
            'build/wp-content/themes/nsr/css/*.css',
            'build/wp-content/themes/nsr/js/*.js',
            'build/**/*.php'
          ]
        },
        options: {
          open: true,
          proxy: '127.0.0.1:8888/nsr/build/',
          keepalive: true,
          watchTask: true
        }
      }
    },

    postcss: {
      options: {
        map: false,
        processors: [
          require('autoprefixer-core')({
              browsers: ['last 2 versions']
          })
        ]
      },
      dist: {
        src: 'build/css/*.css'
      },
      dev: {
        src: 'build/css/main.css'
      }
    }

  });
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-browser-sync');
  grunt.loadNpmTasks('grunt-postcss');
  // Default task(s).
  grunt.registerTask(
    'start',
    'Starts everything.',
    [ 'sass', 'uglify', 'browserSync', 'watch', 'postcss:dev' ]
  );
  grunt.registerTask('default', ['sass', 'uglify', 'postcss:dist']);

};