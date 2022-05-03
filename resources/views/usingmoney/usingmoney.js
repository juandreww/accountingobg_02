// script 2022-05-02
let age = 26;
let born = "may";
console.log(age, born);

age = 40;
console.log(age);

const num = 10;
// num = 7;
console.log(num);

let firstName = 'Juan';
let lastName = 'Andrew';
let fullName = firstName + ' ' + lastName;

// String concat
console.log(fullName);

// get characters
console.log(fullName[3] + ' ' + fullName[5]);

// string length
console.log(fullName.length);

// string methods
console.log(fullName.toUpperCase()  );
let lcase = fullName.toLowerCase();

console.log(lcase);
let index = fullName.indexOf("n");
console.log(index);


// script 2022-05-03
let email = 'juandreww@email.com';

let substr = email.lastIndexOf('e');
console.log(substr);

let substr2 = email.slice(2,5); // start dri index brp, end di index brp
console.log(substr2);

let susbstr3 = email.substr(4,10); // start dr index brp, panjangnya berapa
console.log(susbstr3);

let str4 = email.replace('a', 'o');
console.log(str4);

let arr1 = ['bro', 'ther', 4, 'ever'];
console.log(arr1);
console.log(arr1.length);

let arr2 = ['ken', 'gilbartar', 'seer'];

let result1 = arr2.join('-');
console.log('result 1 ' + result1);

let result2 = arr2.indexOf('seer');
console.log('result 2 ' + result2);

let result3 = arr2.concat(['Jaypee', 'Jasper']);
console.log(`Result 3 ${result3}`);

let result4 = arr2.push('yahoo'); // alter original values
console.log(`Result 4 ${result4}`);
console.log(arr2);

let result5 = arr2.pop();
console.log(result5);
console.log(arr2);
