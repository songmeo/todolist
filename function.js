var i = 0;  
//add new row to list after submitting
function addRow(){
    if (document.getElementById('addTask').value!=''){ 
        i++;
        var title = document.getElementById('addTask').value;
        var node = document.createElement('div'); 
        node.innerHTML = '<input id="option' + i + '" type="checkbox" class="hidden" name="checkbox"><label for="option' + i + '" class="check--label"><span class="check--label-box"></span><span class="check--label-text">'+ title +'</span>';      
        document.getElementById('doList').appendChild(node);    
    }
}

//clear input after submitting
function onFormSubmit(){
    document.getElementById('addTask').value='';
}

//delete all tasks
function deleteAll() {
    var e = document.getElementById("doList");
    while (e.firstChild) {
        e.removeChild(e.firstChild);
    }
}

//delete completed tasks
function deleteComplete() {        
    var boxes = document.getElementsByClassName('hidden');
    var texts = document.getElementsByClassName('check--label');
    for(let i = 0; i<boxes.length; i++){
        box = boxes[i];
        txt = texts[i];
        if(box.checked){
        box.parentNode.removeChild(box);
        txt.parentNode.removeChild(txt);
        }
    }
}

//scrolling
window.onscroll = function() {myFunction()};
function myFunction() {
    var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    var scrolled = (winScroll / height) * 100;
    document.getElementById("myBar").style.width = scrolled + "%";
}