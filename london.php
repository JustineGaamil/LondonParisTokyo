<!DOCTYPE html>
<html lang="en">
<head>
  <title>London</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background: linear-gradient(135deg, #ff7e5f, #feb47b); 
      margin: 0;
      padding: 0;
    }

    h1 {
      text-align: center;
      color: #000000ff;
      margin-top: 5px;
      font-size: 3em;
      text-transform: uppercase;
      letter-spacing: 2px;
      font-weight: bold;
    }

    .content {
      max-width: 1200px;
      margin: 0 auto;
      padding: 40px;
      background-color: #ffffff;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
      border-radius: 12px;
    }

    .intro, .history, .landmarks {
      margin-bottom: 40px;
      padding: 20px;
      border-radius: 8px;
    }

    .intro {
      background-color: rgba(255, 255, 255, 0.8);
    }

    .history {
      background-color: rgba(248, 248, 248, 0.9);
    }

    .landmarks {
      background-color: rgba(240, 240, 240, 0.9);
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: space-between;
    }

    h2, h3 {
      color: #e63946;
      font-size: 1.0em;
      font-weight: bold;
    }

    h3 {
      font-size: 1.0em;
    }

    p {
      font-size: 18px;
      line-height: 1.7;
      color: #333;
      margin-bottom: 20px;
    }

    .history img, .landmarks img {
      width: 100%;
      height: auto;
      border-radius: 10px;
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
      margin-bottom: 20px;
    }

    .landmarks div {
      flex: 1 1 calc(33% - 20px);
      box-sizing: border-box;
    }

    .landmarks div img {
      width: 90%;
      height: auto;
      border-radius: 12px;
      transition: transform 0.3s ease-in-out;
    }

    .landmarks div img:hover {
      transform: scale(1.05);
    }

    .intro img {
      width: 100%;
      max-width: 100%;
      border-radius: 10px;
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
    }

    @media (max-width: 768px) {
      .landmarks div {
        flex: 1 1 100%;
      }
    }

  </style>
</head>
<body>

  <div class="content">
    <h1>London</h1>

    <!-- Added Famous Landmarks Section Title Above -->
    <h2>Famous Landmarks in London</h2>

    <div class="landmarks">
      <div>
        <h3>The Tower of London</h3>
        <img src="assets/toweroflondon.jpg" alt="Tower of London">
        <p>One of the most famous landmarks in London, the Tower of London, was built in the 11th century by William the Conqueror. It has served as a royal palace, prison, and now houses the Crown Jewels.</p>
      </div>
      <div>
        <h3>Big Ben</h3>
        <img src="assets/bigben.jpg" alt="Big Ben">
        <p>Big Ben is the nickname for the Great Bell of the clock at the north end of the Palace of Westminster. The clock tower itself is now known as the Elizabeth Tower in honor of Queen Elizabeth II.</p>
      </div>
      <div>
        <h3>The British Museum</h3>
        <img src="assets/britishmuseum.jpg" alt="The British Museum">
        <p>The British Museum is one of the world's largest and most comprehensive museums, dedicated to human history, art, and culture. It houses over 8 million works, including the Rosetta Stone and Egyptian mummies.</p>
      </div>
    </div>

    <div class="intro">
      <p>London is the capital city of England and the United Kingdom. It is the most populous city in the UK, with a metropolitan area home to over 13 million people.</p>
      <p>Situated on the River Thames, London has been a major settlement for over two millennia. Its history dates back to its founding by the Romans, who called it Londinium.</p>
      <img src="assets/London1.jpeg" alt="London Skyline">
    </div>

    <div class="history">
      <h2>History of London</h2>
      <p>London's history spans over two thousand years. Founded by the Romans as Londinium in AD 43, it has evolved into a global financial and cultural capital.</p>
      <p>Throughout its history, London has experienced major events such as the Norman Conquest in 1066, the Great Fire of 1666, and the London Blitz during World War II. Today, it remains a leading city in finance, fashion, and the arts.</p>
      <img src="assets/historiclondon.jpg" alt="Historic London">
    </div>

  </div>

</body>
</html>
