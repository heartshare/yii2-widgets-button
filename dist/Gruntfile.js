module.exports = function(grunt){
    
    //自动载入任务模块.
    require("matchdep").filterDev("grunt-*").forEach(grunt.loadNpmTasks);

    // 项目配置
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        //less 模块.
        less:
        {
           //公共配置.
           options : 
           {
              syncImport: true,
              banner: '/*!\n * <%= pkg.name %> - LESS  last compressed \n * @licence <%= pkg.name %> - v<%= pkg.version %> (<%= grunt.template.today("yyyy-mm-dd") %>)\n * http://56hm.com/ | Licence: MIT\n */\n'
           },

           //开发环境.
           dev:
           {
               files:
               {
                   'css/fileinput.css' : 'src/less/bootstrap.less',
               }
           },

           //生产环境.
           prod:
           {
               options:
               {
                  compress: true
               },

               files:
               {
                   'css/fileinput.min.css' : 'src/less/bootstrap.less',
               }
           }
        },

        watch:
        {
           less:
           {  
              files: ['src/less/**/*.less'],
              tasks:['less:dev', 'less:prod']
           }
        }

    });


    // 默认任务
    grunt.registerTask('default', ['less:dev', 'less:prod']);
}