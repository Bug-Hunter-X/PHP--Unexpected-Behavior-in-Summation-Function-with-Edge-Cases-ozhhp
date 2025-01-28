function calculateSum(numbers) {
  let sum = 0;
  for (let i = 0; i < numbers.length; i++) {
    sum += numbers[i];
  }
  return sum;
}

let numbers = [1, 2, 3, 4, 5];
let sum = calculateSum(numbers);
console.log("Sum:", sum); // Output: Sum: 15

//Error case: 
let numbers2 = [];
let sum2 = calculateSum(numbers2);
console.log("Sum:",sum2); //Output: Sum: 0

//Another Error Case
let numbers3 = [1,2,3,4, 'a'];
let sum3 = calculateSum(numbers3);
console.log("Sum:",sum3); //Output: NaN