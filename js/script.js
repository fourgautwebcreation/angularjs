'use strict';

var test = angular.module('test',
    [
    'augmenterCount','baisserCount','membres'
   ]
  );

/* Utilisation de variable count dans deux controllers différents */

var augmenterCount = angular.module('augmenterCount',[]);
augmenterCount.controller('augmenterCount', ['$scope',
    function ($scope) {
        $scope.count = 0;
        $scope.description = 'Variable count incrémentée de +1';

        $scope.countmore = function()
        {
         $scope.count = $scope.count+1;
        };
    }
]);

var baisserCount = angular.module('baisserCount',[]);
baisserCount.controller('baisserCount', ['$scope',
    function ($scope) {
        $scope.count = 0;
        $scope.description = 'Variable count incrémentée de -1';

        $scope.countless = function()
        {
         $scope.count = $scope.count-1;
        };
    }
]);

/* REST */

var membres = angular.module('membres',[]);
membres.controller('membres', ['$scope','$http',
    function ($scope,$http) {
        $scope.membres = [];
        $http.get("/resources/members.php")
              .success(function(data)
              {
                $scope.membres = data;
              });
    }
]);
