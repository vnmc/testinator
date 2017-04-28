module.exports = function(grunt)
{
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        watch: {
            scripts: {
                files: ['source/**/*.js'],
                tasks: ['uglify'],
                options: {
                    spawn: true
                }
            },

            css: {
                files: ['source/**/*.scss'],
                tasks: ['sass', 'autoprefixer'],
                options: {
                    spawn: true
                }
            },

            pug: {
                files: ['source/**/*.pug'],
                tasks: ['pug']
            }
        },

        uglify: {
            build: {
                files: [
                    {
                        src: [
                            'source/assets/js/jquery-3.2.0.min.js',
                            'source/assets/js/jquery-ui.min.js',
                            'source/assets/js/jquery.easing.min.js',
                            'source/assets/js/swiper.jquery.min.js',
                            'source/tiles/**/*.js'
                        ],
                        dest: 'build/main.js'
                    }
                ]
            }
        },

        sass: {
            build: {
                options: {
                    style: 'compressed'
                },

                files: [
                    {
                        src: 'source/index.scss',
                        dest: 'build/index.css'
                    }
                ]
            }
        },

        autoprefixer: {
            options: {
                browsers: ['last 2 versions', 'ie 8', 'ie 9']
            },

            build: {
                src: 'build/index.css',
                dest: 'build/index.min.css'
            }
        },

        pug: {
            build: {
                /*
                options: {
                    data: {
                        debug: false
                    }
                },*/
                files: {
                    'build/index.html': 'source/index.pug',
                    'build/page2.html': 'source/page2.pug'
                }
            }
        },

        copy: {
            build: {
                files: [
                    {
                        expand: true,
                        cwd: 'source/assets/favicon',
                        src: '*.png',
                        dest: 'build/'
                    },
                    {
                        expand: true,
                        cwd: 'source/assets/meta',
                        src: '*',
                        dest: 'build/'
                    },
                    {
                        expand: true,
                        cwd: 'source/assets/images',
                        src: '*',
                        dest: 'build/'
                    },
                    {
                        expand: true,
                        cwd: 'source/assets/fonts',
                        src: '*',
                        dest: 'build/'
                    }
                ]
            }
        }
    });

    grunt.loadNpmTasks('grunt-autoprefixer');
    grunt.loadNpmTasks('grunt-contrib-clean');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-pug');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');

    grunt.registerTask('default', ['pug', 'sass', 'autoprefixer', 'uglify', 'copy']);
};
