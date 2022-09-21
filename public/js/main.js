const dropdown = document.querySelector('.dropdown');
const blocLinks = document.querySelector('.bloc-links');
const btnDrop = document.querySelector('.btn-top');
const liItems = document.querySelectorAll('.dropdown li');

const dropdown1 = document.querySelector('.dropdown1');
const blocLinks1 = document.querySelector('.bloc-links1');
const btnDrop1 = document.querySelector('.btn-top1');
const liItems1 = document.querySelectorAll('.dropdown1 li');

const dropdown2 = document.querySelector('.dropdown2');
const blocLinks2 = document.querySelector('.bloc-links2');
const btnDrop2 = document.querySelector('.btn-top2');
const liItems2 = document.querySelectorAll('.dropdown2 li');

let toggleIndex;
let toggleIndex1;
let toggleIndex2;

btnDrop.addEventListener('click', toggleDropDown);
btnDrop1.addEventListener('click', toggleDropDown1);
btnDrop2.addEventListener('click', toggleDropDown2);

function toggleDropDown(){

    if(!toggleIndex) {
        blocLinks.style.height = `${blocLinks.scrollHeight}px`;
        toggleIndex = true;
        return;
    }

    blocLinks.style.height = 0;
    toggleIndex = false;

}

function toggleDropDown1(){

    if(!toggleIndex1) {
        blocLinks1.style.height = `${blocLinks1.scrollHeight}px`;
        toggleIndex1 = true;
        return;
    }

    blocLinks1.style.height = 0;
    toggleIndex1 = false;

}

function toggleDropDown2(){

    if(!toggleIndex2) {
        blocLinks2.style.height = `${blocLinks2.scrollHeight}px`;
        toggleIndex2 = true;
        return;
    }

    blocLinks2.style.height = 0;
    toggleIndex2 = false;

}

liItems.forEach(li => li.addEventListener('click', toggleDropDown))
liItems.forEach(li => li.addEventListener('click', toggleDropDown1))
liItems.forEach(li => li.addEventListener('click', toggleDropDown2))
