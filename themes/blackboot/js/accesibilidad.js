/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.




function zoomText(Action,Element)
{
var obj=document.getElementById(Element); 
var max = 300; 
var min = 70; 

if (obj.style.fontSize==="") { obj.style.fontSize="100%"; }

actual=parseInt(obj.style.fontSize); 
increment=10;

if( Action==="restore" ){ obj.style.fontSize="100%" ;}

if( Action==="increase" && ((actual+increment) <= max ))
{
value=actual+increment;
obj.style.fontSize=value+"%";
}

if( Action==="decrease" && ((actual+increment) >= min ))
{
value=actual-increment;
obj.style.fontSize=value+"%";
}

} 
 */


var fontSize = 1;
        
        // funcion para aumentar la fuente
        function zoomIn() {
            fontSize += 0.1;
            document.getElementById('uso').style.fontSize = fontSize + "em";
        }

        // funcion para disminuir la fuente
        function zoomOut() {
            fontSize -= 0.1;
            document.getElementById('uso').style.fontSize = fontSize + "em";
            
        }