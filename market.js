fetch('output.json')
  //.then(response => response.json())
  .then(data => {
    console.log(data.name); // Output: John
    console.log(data.age); // Output: 30
    console.log(data.city); // Output: New York
  })
  .catch(error => console.error(error));
