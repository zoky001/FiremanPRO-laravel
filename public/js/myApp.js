/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var appFiremanPro = angular.module("firemanPRO",['ngSanitize','firebase'],  function($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    });


/*
var appPopisDiskusija = angular.module("popisDiskusija", ['ngAnimate'])

var appKupon= angular.module("kupon", ['ngAnimate'])


var appKosarica= angular.module("kosarica", ['ngAnimate'])

var appDiskusijeModerator= angular.module("diskusijeModerator", ['ngAnimate'])


var appPretplatniciModerator= angular.module("pretplatnici", ['ngAnimate'])


var appKuponiModerator= angular.module("kuponiModerator", ['ngAnimate'])

var fessmodule = angular.module('log', []);

var sakupljanjeBodova= angular.module('pregledbodova', []);

var crud= angular.module('crud', []);

var footerr= angular.module('footer', []);

var otkljucavanje = angular.module('otkljucavanje', []);

var statistika = angular.module('statistika', []);*/