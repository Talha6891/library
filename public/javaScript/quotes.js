window.onload = function() {

    let quotes = document.getElementById('book-quote-text');

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
            "The beautiful thing about learning is that no one can take it away from you. <br>- <b>B.B. King</b>"
        ];

        return bookQuotes[Math.floor(Math.random() * bookQuotes.length)];
    }

    function updateQuote() {
        quotes.innerHTML = getRandomBookQuote();
    }

    setInterval(updateQuote, 8000);
}
