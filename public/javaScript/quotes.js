window.onload = function() {
    let quotes = document.getElementsByClassName('quotes');
  
    function getRandomBookQuote() {
      const bookQuotes = [
        "The best way to predict your future is to create it. <br>- <b>Abraham Lincoln</b>",
        "Books are the quietest and most constant of friends; they are the most accessible and wisest of counselors, and the most patient of teachers. <br>- <b>Charles W. Eliot</b>",
        "There is no friend as loyal as a book.<br> - <b>Ernest Hemingway</b>",
        "A book is a dream that you hold in your hand. <br>- <b>Neil Gaiman</b>",
        "Reading is to the mind what exercise is to the body. <br>- <b>Joseph Addison</b>",
        "The only true wisdom is in knowing you know nothing.  <br>- <b>Socrates</b>",
        "Education is the passport to the future, for tomorrow belongs to those who prepare for it today. <br>- <b>Malcolm X</b>",
        "The more that you read, the more things you will know. The more that you learn, the more places you'll go. <br>- <b>Dr. Seuss</b>",
        "Develop a passion for learning. If you do, you will never cease to grow. <br>- <b>Anthony J. D'Angelo</b>",
        "The beautiful thing about learning is that no one can take it away from you. <br>- <b>B.B. King</b>",
        "That which does not kill us makes us stronger. <br>- <b>Friedrich Nietzsche</b>",
        "He who has a why to live can bear almost any how. <br>- <b>Friedrich Nietzsche</b>",
        "Invisible threads are the strongest ties. <br>- <b>Friedrich Nietzsche</b>",
        "The man of knowledge must be able not only to love his enemies but also to hate his friends. <br>- <b>Friedrich Nietzsche</b>",
        "Is life not a thousand times too short for us to bore ourselves? <br>- <b>Friedrich Nietzsche</b>",
        "There are no facts, only interpretations. <br>- <b>Friedrich Nietzsche</b>",
        "Seek knowledge from the cradle to the grave. <br>- <b>Prophet Muhammad (PBUH)</b>",
        "The ink of the scholar is more sacred than the blood of the martyr. <br>- <b>Prophet Muhammad (PBUH)</b>",
        "Do not speak unless you can improve the silence. <br>- <b>Sheikh Abdul Qadir Jilani</b>",
        "The wound is the place where the Light enters you. <br>- <b>Mawlana Rumi</b>",
        "In the end, we will remember not the words of our enemies, but the silence of our friends. <br>- <b>Martin Luther King Jr.</b>",
        "When you find peace within yourself, you become the kind of person who can live at peace with others. <br>- <b>Peace Pilgrim</b>"
      ];
  
      return bookQuotes[Math.floor(Math.random() * bookQuotes.length)];
    }

    function updateQuote()
    {
      for (let i = 0; i < quotes.length; i++)
      {

        quotes[i].innerHTML = getRandomBookQuote();
      }
    }
    updateQuote(); // Display initial quote immediately
  
    setInterval(updateQuote, 8000);
  }
  