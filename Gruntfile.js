module.exports = function(grunt) {
	grunt.initConfig({
		less : {
			development : {
				options : {
					compress : true,
				},
				files : {
					"./public/assets/css/main.css" : "./app/assets/less/main.less"
				}
			}
		},
		concat : {
			options : {
				separator : ';',
			},
			dist : {
				src : [
						'./bower_components/jquery/dist/jquery.js',
						'./bower_components/bootstrap/dist/js/bootstrap.js',
						'./app/assets/js/app.js'
						],
				dest : './public/assets/js/main.js',
			},
		},
		uglify : {
			options: {
				mangle: false
			},
			my_target: {
				files : {
					"./public/assets/js/main.js" : "./public/assets/js/main.js"
				}
			}

		}
	});

	grunt.loadNpmTasks('grunt-contrib-less');
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	
	grunt.registerTask('default', ['less','concat','uglify']);
}; 