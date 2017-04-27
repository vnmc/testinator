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

            jade: {
                files: ['source/**/*.jade'],
                tasks: ['jade']
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

        jade: {
            build: {
                /*
                options: {
                    data: {
                        debug: false
                    }
                },*/
                files: {
                    'build/index.html': 'source/index.jade',
                    'build/page2.html': 'source/page2.jade'
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

    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-autoprefixer');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-jade');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-htmlmin');

    grunt.registerTask('default', ['jade', 'sass', 'autoprefixer', 'uglify', 'copy']);
};
