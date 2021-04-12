module.exports = function(grunt) {
  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON("package.json"),
    // Sass task
    sass: {
      options: {
        implementation: require('node-sass'),
        sourceMap: true,
      },
      dist: {
        files: {
          "build/assets/css/critical.css": "src/assets/sass/critical.scss",
          "build/assets/css/grid-toggle.css": "src/assets/sass/modules/grid-toggle.scss",
          "build/assets/css/style.css": "src/assets/sass/style.scss",
          "build/assets/css/frontpage.css": "src/assets/sass/frontpage.scss",
          "build/colorscheme/assets/css/demo-master-palette-24-hues.css": "src/colorscheme/assets/sass/demo/demo-master-palette-24-hues.scss",
          "build/colorscheme/assets/css/demo-monochrome-palette-24-hues.css": "src/colorscheme/assets/sass/demo/demo-monochrome-palette-24-hues.scss",
          "build/colorscheme/assets/css/demo.css": "src/colorscheme/assets/sass/demo/demo.scss",
          "build/colorscheme/assets/css/index.css": "src/colorscheme/assets/sass/index.scss",
        }
      }
    },
//https://stackoverflow.com/questions/64057023/error-postcss-plugin-autoprefixer-requires-postcss-8-update-postcss-or-downgra
    postcss: {
      options: {
        map: {
          inline: false, // save all sourcemaps as separate files...
          annotation: 'build/assets/css/maps/' // ...to the specified directory
        },
        // map: true,
        processors: [
          require('autoprefixer')(),
          require('cssnano')()
        ]
      },

      dist: {
        // expand: true,
        // flatten: true,
        files: {
          "build/assets/css/critical.min.css": "build/assets/css/critical.css",
          "build/assets/css/grid-toggle.min.css": "build/assets/css/grid-toggle.css",
          "docs/assets/css/style.min.css": "build/assets/css/style.css",
          "docs/assets/css/frontpage.min.css": "build/assets/css/frontpage.css",
          "build/colorscheme/assets/css/demo-master-palette-24-hues.min.css": "build/colorscheme/assets/css/demo-master-palette-24-hues.css",
          "build/colorscheme/assets/css/demo-monochrome-palette-24-hues.min.css": "build/colorscheme/assets/css/demo-monochrome-palette-24-hues.css",
          "build/colorscheme/assets/css/demo.min.css": "build/colorscheme/assets/css/demo.css",
          "build/colorscheme/assets/css/index.min.css": "build/colorscheme/assets/css/index.css",
        }
      }
    },
    // Watch task
    watch: {
      options: {
        livereload: 35729,
      },

      sass: {
        files: ["src/assets/sass/**/*.scss","src/colorscheme/assets/sass/**/*.scss"],
        tasks: ['sass','postcss','copy'],
        options: {
          //   spawn: false,
          //   livereload: true
        }
      },
      js: {
        files: ['src/assets/js/**/*.js'],
        tasks: ['concat','uglify'],
        options: {
          // spawn: false
        }
      },
      gruntfile: {
        files: "gruntfile.js",
        options: {
          // spawn: false,
          // livereload: true,
          // reload: true
        }
      }
    },
    // Clean task
    clean: {
      css: {
        src: ["docs/assets/css/**/*.css","build/assets/css/**/*.css"]
      },
      map: {
        src: ["docs/assets/css/**/*.map","build/assets/css/**/*.map"]
      },
      all: {
        src: ["css/**/*.css","css/**/*.map"]
      }
    },

    uglify: {
      options: {
        // livereload: true,
        // preserveComments: 'false'
        preserveComments: /^!/
        // only preserve comments that start with a bang
        // https://github.com/gruntjs/grunt-contrib-uglify/issues/366
      },
      dist: {
        files: {
          'build/assets/js/head-detect.min.js': 'src/assets/js/head-detect.js',
          'build/assets/js/toggle-grid.min.js': 'src/assets/js/toggle-grid.js',
          'build/assets/js/theme-switch-with-local-storage.min.js': 'src/assets/js/theme-switch-with-local-storage.js'
        }
      }
    },
    concat: {
      dist: {
        files: {
          // 'docs/assets/js/concat.min.js' : ['build/assets/js/fontfaceobserver.min.js'],
        }
      }
    },
    copy: {
      main: {
        files: {
          'src/inc/critical.css.inc': "build/assets/css/critical.min.css",
          'src/inc/grid-toggle.css.inc': "build/assets/css/grid-toggle.min.css",
          'src/inc/head-detect.js.inc': 'build/assets/js/head-detect.min.js',
          'src/inc/toggle-grid.js.inc': 'build/assets/js/toggle-grid.min.js',
          'src/inc/theme-switch-with-local-storage.js.inc': 'build/assets/js/theme-switch-with-local-storage.min.js',
        },
        flatten: true,
        filter: 'isFile',
      },
    },

    htmlmin: {
      dist: {
        options: {
          removeComments: true,
          collapseWhitespace: true
        },
        files: {
          'docs/index.html': 'build/html/index.html',
          'docs/webdesign/steunpunt-vluchtelingen-de-bilt/index.html': 'build/html/webdesign/steunpunt-vluchtelingen-de-bilt/index.html',
          'docs/webdesign/mediatheek-steunpunt-vluchtelingen-de-bilt/index.html': 'build/html/webdesign/mediatheek-steunpunt-vluchtelingen-de-bilt/index.html',
          'docs/webdesign/friends-of-light/index.html': 'build/html/webdesign/friends-of-light/index.html',
          'docs/webdesign/ancestral-health/index.html': 'build/html/webdesign/ancestral-health/index.html'
        }
      }
    }

  });

  // Load the plugins to run your tasks
  require("load-grunt-tasks")(grunt, {
    scope: "devDependencies"
  });
  // Default task(s).
  grunt.registerTask("default", [
    "clean:all",
    "sass",
    "postcss:dist",
    "uglify",
    "concat",
    "copy",
    "watch",
    "htmlmin"
  ]);
  grunt.registerTask('build', ['clean','concat', 'uglify', 'sass', 'postcss:dist',  'copy', 'htmlmin']);
};
