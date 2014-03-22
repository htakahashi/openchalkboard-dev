module.exports = function(grunt) {
	grunt.initConfig({

		less: {
			development: {
				files: {
					'style.css': 'less/main.less'
				}	
			},

		},

		/*htmllint: {
	        all: ["./markup/*.html"]
	    },*/

		watch: {
			development: {
				files: '**/*.less',
				tasks: ['less'],
				options: {
					livereload: true
				}
			}

		}
	});


	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-less');
	/*grunt.loadNpmTasks('grunt-html');*/

	grunt.registerTask('default', ['less', 'watch']);

};
