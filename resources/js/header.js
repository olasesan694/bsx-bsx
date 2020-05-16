// ES6 Class
class TypeWriter {
    constructor(txtElement, words, wait = 1500) { // time to wait before cursor starts deleting
      this.txtElement = txtElement; // where the cursor currently is
      this.words = words; 
      this.txt = '';
      this.wordIndex = 0; // which word we are on. Set to 0 by default
      this.wait = parseInt(wait, 10); // makes sure wait (base 10) is an integer
      this.type(); // does the main work 
      this.isDeleting = false; // where the cursor is actually deleting
    }
  
    type() { 
      // Current index of word
      const current = this.wordIndex % this.words.length;
      // Get full text of current word
      const fullTxt = this.words[current];
  
      // Check if deleting
      if(this.isDeleting) {
        // Remove char
        this.txt = fullTxt.substring(0, this.txt.length - 1);
      } else {
        // Add char
        this.txt = fullTxt.substring(0, this.txt.length + 1);
      }
  
      // Insert txt into element
      this.txtElement.innerHTML = `<span class="txt">${this.txt}</span>`;
  
      // Initial Type Speed -- dynamic, so using let
      let typeSpeed = 150; 
  
      if(this.isDeleting) { 
        typeSpeed /= 2; // half a second; faster when deleting
      }
  
      // If word is complete
      if(!this.isDeleting && this.txt === fullTxt) {
        // Make pause at end
        typeSpeed = this.wait;
        // Set delete to true
        this.isDeleting = true;
      } else if(this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        // Move to next word
        this.wordIndex++;
        // Pause before start typing
        typeSpeed = 500;
      }
  
      setTimeout(() => this.type(), typeSpeed); // runs each time a character gets deleted
    }
  }
  
  
  // Init On DOM Load --- runs when the dom has been loaded
  document.addEventListener('DOMContentLoaded', init); // will init our app
  
  // Init App
  function init() {
    const txtElement = document.querySelector('.txt-type');
    // gets and parses the word the word so js can use it instead of leaving it as a string
    const words = JSON.parse(txtElement.getAttribute('data-words')); 
    const wait = txtElement.getAttribute('data-wait'); 
    // Init(ialize) the TypeWriter
    new TypeWriter(txtElement, words, wait);
  }