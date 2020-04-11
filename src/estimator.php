<?php

function covid19ImpactEstimator($data)
{
   data(){
     $name = "Africa";
     $avgAge = 19.7;
     $avgDailyIncomeInUSD = 5; 
     $avgDailyIncomePopulation = 0.71;
   }
   $periodType = "days";
   $timeToElapse = 58;
   $reportedCases = 674; 
   $population = 66622705;
   $totalHospitalBeds = 1380614;
   
   impact($currentlyInfected){
    $currentlyInfected =($GLOBALS['$reportedCases']* 10);
    return$currentlyInfected;
   }
   severeImpact(){

   }
   return$data;
}
