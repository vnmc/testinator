module.exports = function(grunt)
{
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        watch: {
            scripts: {
                files: ['source/js/*.js'],
                tasks: ['concat', 'uglify'],
                options: {
                    spawn: true
                }
            },

            css: {
                files: ['**/*.scss'],
                tasks: ['sass', 'autoprefixer'],
                options: {
                    spawn: true
                }
            },

            jade: {
                files: ['source/views/*.jade'],
                tasks: ['jade']
            },

            html: {
                files: ['source/*.html'],
                tasks: ['htmlmin']
            }
        },

        concat: {
            dist: {
                src: [
                    'source/js/*.js',
                    'source/js/vendor/*.js'
                ],
                dest: 'demo/js/production.js'
            },
            build: {
                src: [
                    'source/js/*.js',
                    'source/js/vendor/*.js'
                ],
                dest: 'build/js/production.js'
            }
        },

        uglify: {
            build: {
                src: 'build/js/production.js',
                dest: 'demo/js/production.js'
            }
        },

        sass: {
            dist: {
                options: {
                    style: 'compressed'
                },

                files: [{
                    expand: true,
                    cwd: 'source/scss',
                    src: ['*.scss'],
                    dest: 'demo/css/',
                    ext: '.css'
                }]
            },
            build: {
                files: [{
                    expand: true,
                    cwd: 'source/scss',
                    src: ['*.scss'],
                    dest: 'build/css/',
                    ext: '.css'
                }]
            }
        },

        autoprefixer: {
            options: {
                browsers: ['last 2 versions', 'ie 8', 'ie 9']
            },

            multiple_files: {
                src: 'build/css/main.css',
                dest: 'build/css/main.min.css'
            }
        },
        
        uncss: {
          dist: {
            files: {
              'demo/css/main.css': ['demo/index.html', 'demo/internal.html']
            }
          }
        },

        jade: {
            compile: {
                options: {
                    data: {
                        debug: false
                    }
                },
                files: {
                    "build/index.html": ["source/views/index.jade"],
                    "build/internal.html": ["source/views/internal.jade"]
                }
            }
        },

        htmlmin: {
            dist: {
                options: {
                    removeComments: true,
                    collapseWhitespace: true
                },
                files: {
                    'demo/index.html': 'build/index.html',
                    'demo/internal.html': 'build/internal.html'
                }
            }
        },

        copy: {
            main: {
                files: [
                    {
                        expand: true,
                        cwd: 'source/',
                        src: ['fonts/**'],
                        dest: 'build/'
                    },
                    {
                        expand: true,
                        flatten: true,
                        src: ['source/css/images/*'],
                        dest: 'build/css/images/'
                    },
                    {
                        expand: true,
                        flatten: true,
                        src: ['source/img/*'],
                        dest: 'build/img/'
                    },
                    {
                        expand: true,
                        flatten: true,
                        src: ['source/js/vendor/jquery-1.11.2.min.js'],
                        dest: 'build/js/vendor/'
                    },
                    {
                        expand: true,
                        flatten: true,
                        src: ['source/*.png'],
                        dest: 'build/'
                    },
                    {
                        expand: true,
                        flatten: true,
                        src: ['source/*.txt'],
                        dest: 'build/'
                    },
                    {
                        expand: true,
                        flatten: true,
                        src: ['source/browserconfig.xml'],
                        dest: 'build/'
                    },
                    {
                        expand: true,
                        flatten: true,
                        src: ['source/favicon.ico'],
                        dest: 'build/'
                    },
                    {
                        expand: true,
                        flatten: true,
                        src: ['source/404.html'],
                        dest: 'build/'
                    }
                ]
            },
            dist: {
                files: [
                    {
                        expand: true,
                        cwd: 'source/',
                        src: ['fonts/**'],
                        dest: 'demo/'
                    },
                    {
                        expand: true,
                        flatten: true,
                        src: ['source/*.png'],
                        dest: 'demo/'
                    },
                    {
                        expand: true,
                        flatten: true,
                        src: ['source/*.txt'],
                        dest: 'demo/'
                    },
                    {
                        expand: true,
                        flatten: true,
                        src: ['source/browserconfig.xml'],
                        dest: 'demo/'
                    },
                    {
                        expand: true,
                        flatten: true,
                        src: ['source/favicon.ico'],
                        dest: 'demo/'
                    },
                    {
                        expand: true,
                        flatten: true,
                        src: ['source/404.html'],
                        dest: 'demo/'
                    },
                    {
                        expand: true,
                        cwd: 'build/img/',
                        src: ['**/*.{png,jpg,gif,svg}'],
                        dest: 'demo/img/'
                    },
                    {
                        expand: true,
                        cwd: 'build/css/images/',
                        src: ['**/*.{png,jpg,gif}'],
                        dest: 'demo/css/images/'
                    }
                ]
            }
        }

    });

    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-autoprefixer');
    grunt.loadNpmTasks('grunt-uncss');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-jade');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-htmlmin');

    grunt.registerTask('default', ['jade', 'sass:build', 'autoprefixer', 'copy:main', 'concat:build']);
    grunt.registerTask('dist', ['copy:dist', 'concat:dist', 'sass:dist', 'uglify', 'htmlmin', 'uncss']);
};
