<!DOCTYPE HTML>

<html ng-app="test">
 <head>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js"></script>
  <script type="text/javascript" src="/js/script.js"></script>
 </head>

 <body>
  <section>

   <!-- Deux controleurs avec le même nom de variable count -->
   <div ng-controller="augmenterCount">
    <input type="button" ng-click="countmore()" value="Augmenter le chiffre" />
    <span>{{count}}</span>
    <p>{{description}}</p>
   </div>

   <div ng-controller="baisserCount">
    <input type="button" ng-click="countless()" value="Baisser le chiffre" />
    <span>{{count}}</span>
    <p>{{description}}</p>
   </div>

   <!-- REST-->
   <div ng-controller="membres">
    <p ng-repeat="membre in membres">
     {{membre.prenom}} {{membre.nom}}
    </p>
   </div>

  </section>
 </body>
</html>
