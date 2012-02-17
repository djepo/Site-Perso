/** 
 * @fileoverview JS Permettant de calculer un age, et de le renvoyer dans un fichier html
 *
 * @author CAILBAUT Olivier
 * @version 0.1 
 */

//Appel à la fonction de calcul de l'age'
CalculAge();

/**
 * Permet de calculer un age
 * @returns Aucun retour
 * @type Aucun type, car aucun retour
 * @author CAILBAUT Olivier
 */
function CalculAge()
{    
    DateNaissance=new Date(1978,8-1,8,0,0,0);   
    Now=new Date();
    
    //Traitement des années    
    ageAn=Now.getYear()-DateNaissance.getYear();
    
    //Traitement des mois
    if (Now.getMonth()+1>=DateNaissance.getMonth()+1){        
        ageMois=Now.getMonth()-DateNaissance.getMonth();
    }
    else {        
        ageMois=12+Now.getMonth()-DateNaissance.getMonth();
        ageAn=ageAn-1;        
    }    

    //Traitement des jours
    if (Now.getDate()>DateNaissance.getDate()){        
        ageJours=Now.getDate()-DateNaissance.getDate();
    }
    else {
        ageMois=ageMois-1       
        ageJours=getNbJoursMois(Now.getMonth(),Now.getYear())+Now.getDate()-DateNaissance.getDate();
    }    
    
    //Traitement des Heures
    if (Now.getHours()>=DateNaissance.getHours()){        
        ageHeures=Now.getHours()-DateNaissance.getHours();
    }
    else {
        ageJours=ageJours-1;        
        ageHeures=24+Now.getHours()-DateNaissance.getHours();
    }
    
    //Traitement des minutes
    if (Now.getMinutes()>=DateNaissance.getMinutes()){        
        ageMinutes=Now.getMinutes()-DateNaissance.getMinutes();
    }
    else {
        ageHeures=ageHeures-1;        
        ageMinutes=60+Now.getMinutes()-DateNaissance.getMinutes();
    }
    
    if (Now.getSeconds()>=DateNaissance.getSeconds()){        
        ageSecondes=Now.getSeconds()-DateNaissance.getSeconds();
    }
    else {
        ageMinutes=ageMinutes-1;        
        ageSecondes=60+Now.getSeconds()-DateNaissance.getSeconds();
    }
    
    //on n'affiche pas les valeurs à 0, mais on doit décrémenter la valeur antécédente si on y est
    if (ageSecondes==0){
        ageMinutes=ageMinutes-1;
        if (ageMinutes==0){
            ageHeures=ageHeures-1;
            if (ageHeures==0){
                ageJours=ageJours-1;        
                if (ageJours==0){
                    ageMois=ageMois-1;
                    if (ageMois==0){
                        ageAns=ageAns-1;
                    }
                }
            }  
        }
    }
    
    //Préparation de la chaine de sortie
    if (ageAn==0){
        ageAn="";
    }
    else{
        ageAn=ageAn.toString() + " ans "
    }
    
    if (ageMois==0){
        ageMois="";
    }
    else{
        ageMois=ageMois.toString() + " mois "
    }
    
    if (ageJours==0){
        ageJours="";
    }
    else{
        ageJours=ageJours.toString() + " jours "
    }
    
    if (ageHeures==0){
        ageHeures="";
    }
    else{
        ageHeures=ageHeures.toString() + " heures "
    }
    
    if (ageMinutes==0){
        ageMinutes="";
    }
    else{
        ageMinutes=ageMinutes.toString() + " minutes "
    }
    
    if (ageSecondes==0){
        ageSecondes="";
    }
    else{
        ageSecondes=ageSecondes.toString() + " secondes "
    }
    //Retour dans l'élément age
    try{
    document.getElementById("age").innerHTML = ageAn + ageMois + ageJours+ ageHeures +ageMinutes +ageSecondes;   
    }
    catch(error){
        
    }
        
    //Appel récursif de la fonction toutes les 999 millisecondes
    setTimeout('CalculAge();',999);
}

/**
 * Permet de retourner le nombre de jours dans un mois, en prenant en compte les années bisextiles
 * @returns Nombre de jour dans le mois passé en paramètre
 * @type Entier
 * @author CAILBAUT Olivier
 */
function getNbJoursMois(mois, annee) {
    var lgMois = new Array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
    if ((annee%4 == 0 && annee%100 != 0) || annee%400 == 0) lgMois[1] += 1;
    return lgMois[mois]; // 0 < mois <11
}