// class Queue{
//     constructor() {
//         this.items = [];
//     }

//     enqueue(item) {
//         this.items.push(item);
//     }

//     dequeue() {
//         return this.items.shift();
//     }

//     peek() {
//         return this.items[0];
//     }

//     getSize() {
//         return this.items.length;
//     }

//     isEmpty() {
//         return this.getSize() === 0;
//     }
// }

// let cab1 = [];
// let cab2 = [];
// let cab3 = [];
// let cab4 = [];
// let cab5 = [];

// // cab1.enqueue('A01');
// // cab1.enqueue('A02');
// // cab1.enqueue('A03');
// // cab1.enqueue('A04');

// let numberOne = document.querySelector('.number-one');
// let numberTwo = document.querySelector('.number-two');
// let numberThree = document.querySelector('.number-three');
// let numberFour = document.querySelector('.number-four');
// let numberFive = document.querySelector('.number-five');

// let ticket = document.querySelector('.client-ticket-number');
// let cabinet = document.querySelector('.client-cabinet-number');
// let message = document.querySelector('.client-message');

// let giveTicket1 = document.querySelector('.cab-1');
// let giveTicket2 = document.querySelector('.cab-2');
// let giveTicket3 = document.querySelector('.cab-3');
// let giveTicket4 = document.querySelector('.cab-4');
// let giveTicket5 = document.querySelector('.cab-5');

// let sendCab1 = document.querySelector('.person-1');
// let sendCab2 = document.querySelector('.person-2');
// let sendCab3 = document.querySelector('.person-3');
// let sendCab4 = document.querySelector('.person-4');
// let sendCab5 = document.querySelector('.person-5');

// let peopleInQueue1 = document.querySelector('.in-q-1');
// let peopleInQueue2 = document.querySelector('.in-q-2');
// let peopleInQueue3 = document.querySelector('.in-q-3');
// let peopleInQueue4 = document.querySelector('.in-q-4');
// let peopleInQueue5 = document.querySelector('.in-q-5');

// peopleInQueue1.innerHTML = `${cab1.length}`;
// peopleInQueue2.innerHTML = `${cab2.length}`;
// peopleInQueue3.innerHTML = `${cab3.length}`;
// peopleInQueue4.innerHTML = `${cab4.length}`;
// peopleInQueue5.innerHTML = `${cab5.length}`;

// let added = document.querySelector('.added-B')

// // JSON.parse(localStorage.getItem('cab1'))

// // let a = 0;

// // giveTicket1.addEventListener('click', function(){
// //     a++;
// //     cab1.push(`A${('00' + a).slice(-2)}`);
// //     console.log('added succesfully')
// //     localStorage.setItem('cab1', JSON.stringify(cab1));
// //     peopleInQueue1.innerHTML = `${cab1.length}`; 
// // })

// // sendCab1.addEventListener('click', function(){
// //     peopleInQueue1.innerHTML = `${cab1.length}`; 
// //     if (cab1.length === 0){
// //         numberOne.innerHTML = '-';
// //         message.classList.remove('active');
// //     } else{
// //         numberOne.innerHTML = `${cab1.shift()}`;
// //         ticket.innerHTML = `${numberOne.innerHTML}`;
// //         cabinet.innerHTML = '101';
// //         message.classList.add('active');
// //         localStorage.setItem('cab1Send', JSON.stringify(cab1));
// //         localStorage.setItem('a', JSON.stringify(cab1));
// //     }
// // })

// // let b = 0;

// // giveTicket2.addEventListener('click', function(){
// //     b++;
// //     cab2.push(`B${('00' + b).slice(-2)}`);
// //     added.innerHTML = `B${('00' + b).slice(-2)}`;
// //     console.log('added succesfully');
// //     peopleInQueue2.innerHTML = `${cab2.length}`;
    
// // })

// // sendCab2.addEventListener('click', function(){
// //     peopleInQueue2.innerHTML = `${cab2.length}`;
// //     if (cab2.length === 0){
// //         numberTwo.innerHTML = '-';
// //         message.classList.remove('active');
// //     } else{
// //         numberTwo.innerHTML = `${cab2.shift()}`;
// //         ticket.innerHTML = `${numberTwo.innerHTML}`;
// //         cabinet.innerHTML = '102';
// //         message.classList.add('active');
// //     }
// // })


// // let c = 0;

// // giveTicket3.addEventListener('click', function(){
// //     c++;
// //     cab3.push(`C${('00' + c).slice(-2)}`);
// //     added.innerHTML = `C${('00' + c).slice(-2)}`;
// //     console.log('added succesfully');
// //     peopleInQueue3.innerHTML = `${cab3.length}`;
// // })

// // sendCab3.addEventListener('click', function(){
// //     peopleInQueue3.innerHTML = `${cab3.length}`;
// //     if (cab3.length === 0){
// //         numberThree.innerHTML = '-';
// //         message.classList.remove('active');
// //     } else{
// //         numberThree.innerHTML = `${cab3.shift()}`;
// //         ticket.innerHTML = `${numberThree.innerHTML}`;
// //         cabinet.innerHTML = '103';
// //         message.classList.add('active');
// //     }
// // })


// // let d = 0;

// // giveTicket4.addEventListener('click', function(){
// //     d++;
// //     cab4.push(`D${('00' + d).slice(-2)}`);
// //     added.innerHTML = `D${('00' + d).slice(-2)}`;
// //     console.log('added succesfully');
// //     peopleInQueue4.innerHTML = `${cab4.length}`;
// // })

// // sendCab4.addEventListener('click', function(){
// //     peopleInQueue4.innerHTML = `${cab4.length}`;
// //     if (cab4.length === 0){
// //         numberFour.innerHTML = '-';
// //         message.classList.remove('active');
// //     } else{
// //         numberFour.innerHTML = `${cab4.shift()}`;
// //         ticket.innerHTML = `${numberFour.innerHTML}`;
// //         cabinet.innerHTML = '104';
// //         message.classList.add('active');
// //     }
// // })

// // let e = 0;

// // giveTicket5.addEventListener('click', function(){
// //     e++;
// //     cab5.push(`E${('00' + e).slice(-2)}`);
// //     added.innerHTML = `E${('00' + e).slice(-2)}`;
// //     console.log('added succesfully');
// //     peopleInQueue5.innerHTML = `${cab5.length}`;
// // })

// // sendCab5.addEventListener('click', function(){
// //     peopleInQueue5.innerHTML = `${cab5.length}`;
// //     if (cab5.length === 0){
// //         numberFive.innerHTML = '-';
// //         message.classList.remove('active');
// //     } else{
// //         numberFive.innerHTML = `${cab5.shift()}`;
// //         ticket.innerHTML = `${numberFive.innerHTML}`;
// //         cabinet.innerHTML = '105';
// //         message.classList.add('active');
// //     }
// // })



// // window.addEventListener('Storage', event => {
// //     console.log('storage')
// // })

// var numberblock1 = document.querySelector('.number-one').getAttribute('data-attr');
// document.querySelector('.number-one').innerHTML = `A${('00' + numberblock1).slice(-2)}`;
// document.querySelector('.added-A').innerHTML = `A${('00' + numberblock1).slice(-2)}`;

// var sign1 = document.querySelector('.cab-1').getAttribute('data-attr');
// // document.querySelector('.cab-1').addEventListener('click', function(){
// //     print();
// //     sign1;
// //     console.log('added');
// // });





function ajax(link, callback) {
    const request = new XMLHttpRequest();
    let method = 'get'
    request.open(method, link);
    request.send();
    request.onreadystatechange = function () {
        if (request.readyState === 4 && request.status === 200) {
            if (callback) {
                callback(request);
            }
        }
    };
}
const giveTickets = document.querySelector('.give-ticket');
giveTickets.addEventListener('click', (e) => {
    if (e.target.closest('.cab')) {
        const cab = e.target.closest('.cab');
        console.log(cab.dataset.cab)
        ajax(`add-db.php?cab=${cab.dataset.cab}`, (response) => {
            const ticket = response.responseText;
        });
    }
});

const sendClient = document.querySelector('.next-person');
sendClient.addEventListener('click', (e) => {
    if (e.target.closest('.person')) {
        const person = e.target.closest('.person');
        console.log(person.dataset.person)
        ajax(`del-db.php?person=${person.dataset.person}`, (response) => {
            const delPerson = response.responseText;
        });
    }
});