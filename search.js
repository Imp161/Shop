const input = document.getElementById('searchplace');
const search = document.getElementById('searchbutton');
const kinds = document.querySelectorAll('.kind');
const names = document.querySelectorAll('.name');


search.onclick = poisk;

function poisk(e){
    e.preventDefault();

    data = input.value;

    let index = 0;
    for (const i of names) {
        i.classList.remove('yes');
        if (i.innerHTML.includes(data)){
           i.classList.add('yes');
        }
        else{
            console.log("fail");
        }
        index++;
    }

   for (const i of kinds) {
        i.classList.remove('h6');
        if (i.innerHTML.includes(data)){
           i.classList.add('h6');
        }
        else{
            console.log("fail");
        }
        index++;
    }
}