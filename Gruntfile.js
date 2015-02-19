module.exports = function(grunt) {

    require('time-grunt')(grunt);

    var devmode = grunt.option('dev');

    grunt.initConfig({
      pkg: grunt.file.readJSON('package.json'),
      assemble: {
          options: {
            data: ['src/data/*.json'],
            assets: 'dist/static',
            layout: 'layout.hbs',
            partials: 'src/templates/partials/**/*.hbs',
            layoutdir: 'src/templates/layouts',
            helpers: ['handlebars-helper-autolink','handlebars-helper-isactive','src/helpers/**.js']
        },

        site: {
          options: {
              // postprocess: devmode ? false : require('pretty')
          },

          files: [{
              expand: true,
              flatten: false,
              // cwd: 'content/**/*.md',
              cwd: 'content/',
              src: ['**/*.{md,hbs,html,xml}'],
              dest: 'dist'
          }]
        }
      },

      clean: {
          static: ['dist/static/**/*.{css,js}'],
          html: ['dist/**/*.html', '!dist/schilderijen/Slang-Glijbaan.html', '!dist/schilderijen/Nachtdieren-Schommel.html','!dist/schilderijen/Baviaan-Auto.html','!dist/schilderijen/Geit-Gietijzer.html','!dist/schilderijen/Zeepaard-Ruiterstandbeeld.html','!dist/webdesign/typeface-tester-screenshot-header.html','!dist/webdesign/typeface-tester-screenshot-selectmenu.html','!dist/webdesign/typeface-tester-screenshot-footer.html','!dist/webdesign/MassageBron-Beeldlogo.html','!dist/webdesign/MassageBron-Logoheader.html','!dist/webdesign/MassageBron-Screenshot-Info.html','!dist/google*.html']
      },

      sass: {
        dist: {
          files: {
                'dist/static/style.css': 'src/sass/style.scss',
                'dist/static/home.css': 'src/sass/home.scss'
          }
        }
      },

      autoprefixer: {
        options: {
          browsers: ['last 2 versions', '> 1%']
        },

        dist: {
          expand: true,
          flatten: true,
          files: {
            'dist/static/prefixed/style.css': 'dist/static/style.css',
            'dist/static/prefixed/home.css': 'dist/static/home.css'
          }
        }
      },

      cssmin: {
        dist: {
          files: {
          'dist/static/prefixed/style.min.css': 'dist/static/prefixed/style.css',
          'dist/static/prefixed/home.min.css': 'dist/static/prefixed/home.css'
          }
        }
      },

      copy: {
        main: {
          src: 'dist/static/prefixed/home.min.css',
          dest: 'src/templates/partials/homeheadstyles.hbs',
          flatten: true,
          filter: 'isFile',
        },
      },

      htmlmin: {                                     // Task
        dist: {                                      // Target
          options: {                                 // Target options
            removeComments: true,
            collapseWhitespace: true
          },
          files: {                                   // Dictionary of files
            'dist/index.html': 'dist/index.html',    // 'destination': 'source'
            'dist/schilderijen/index.html': 'dist/schilderijen/index.html',
            'dist/webdesign/index.html': 'dist/webdesign/index.html',
            'dist/contact/index.html': 'dist/contact/index.html'
          }
        }
      },

      concat: {
         dist: {
           files: {
             'dist/static/main.js' :  ['src/js/svg-test.js'],
           }
         }
       },

      uglify: {
        options: {
          preserveComments: 'some'
        },
        dist: {
          files: {
            'dist/static/main.min.js' : 'dist/static/main.js',
          }
        }
      },

      hashres: {
         options: {
             fileNameFormat: '${name}.${ext}?${hash}',
             renameFiles: false
         },
         dist: {
             src: ['dist/static/main.min.js','dist/static/prefixed/style.min.css','dist/static/prefixed/home.min.css'],
             dest: 'dist/**/*.html'
        }
     },

      connect: {
        dev: {
          options: {
            hostname: '0.0.0.0',
            port: 3000,
            base: 'dist',
            livereload: true
          }
        }
      },

      watch: {
        options: {
          livereload: true,
          spawn: false
        },

        scss: {
            files: ['src/**/*.scss'],
            tasks: 'scss'
        },

        js: {
            files: ['src/js/**/*.js'],
            tasks: 'js'
        },

        html: {
            files: ['content/**/*', 'src/templates/**/*'],
            tasks: 'html'
        }
    },

      // from the commandline run: grunt gh-pages to build the remote gh-pages branch:
      // https://github.com/tschaub/grunt-gh-pages
      'gh-pages': {
        options: {
          // base: 'dist',
          // push: false
          base: 'dist'
        },
        src: '**/*'
      }

  });

    grunt.registerTask('build', ['clean', 'concat', 'uglify', 'sass', 'autoprefixer', 'cssmin', 'copy', 'assemble', 'htmlmin', 'hashres']);
    grunt.registerTask('scss', ['sass', 'autoprefixer', 'cssmin', 'hashres']);
    grunt.registerTask('js', ['uglify', 'concat']);
    grunt.registerTask('html', ['assemble', 'hashres']);
    grunt.registerTask('default', ['build', 'connect', 'watch']);
    // grunt.registerTask('default', ['build', 'connect', 'watch', 'assemble:component']);
    // grunt.registerTask('default', ['assemble:component']);

    grunt.loadNpmTasks('assemble', 'grunt-verb', 'grunt-hashres', 'grunt-gh-pages', 'grunt-contrib-copy', 'grunt-contrib-htmlmin');
    require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks);

  // Default tasks to be run.
};
//    if (devmode) {
//        grunt.task.registerTask('hashres', function(){ console.log('Skipping hashres task because of --dev flag'); });
//        grunt.task.registerTask('uncss', function(){ console.log('Skipping uncss task because of --dev flag'); });
//    }
// };
