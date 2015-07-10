var counter = 1;
var limit = 100;

function addInput(divName)
{
     if (counter == limit)
     {
          alert("You have reached the limit of adding " + counter + " inputs");
     }
     else 
     {
          var newdiv = document.createElement('div');
          newdiv.innerHTML = "Entry " + (counter + 1) + " <br><input type='text' name='fields[]' id='fields'>";
          document.getElementById(divName).appendChild(newdiv);
          counter++;
     }
}

