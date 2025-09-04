<!DOCTYPE html>
<html lang="en">
<head>
  <title>Rome</title>
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
    <h1>Rome</h1>

    <h2>Famous Landmarks in Rome</h2>

    <div class="landmarks">
      <div>
        <h3>Colosseum</h3>
        <img src="assets/colosseum.jpg" alt="Colosseum">
        <p>The Colosseum is an ancient amphitheater located in the center of Rome. It was used for gladiatorial contests and public spectacles, and it remains one of the most iconic landmarks in Rome.</p>
      </div>
      <div>
        <h3>Vatican City</h3>
        <img src="assets/vaticancity.jpeg" alt="Vatican City">
        <p>Vatican City is an independent city-state enclaved within Rome. It is the smallest country in the world and the seat of the Roman Catholic Church, with landmarks like St. Peter's Basilica and the Sistine Chapel.</p>
      </div>
      <div>
        <h3>Pantheon</h3>
        <img src="assets/pantheon.jpeg" alt="Pantheon">
        <p>The Pantheon is a former Roman temple, now a church, that is known for its large dome and oculus. It is one of the best-preserved ancient Roman buildings and has been in continuous use for almost 2,000 years.</p>
      </div>
    </div>

    <div class="intro">
      <p>Rome is the capital city of Italy and one of the oldest cities in the world, with a history spanning over 2,500 years. It is known for its art, architecture, and cultural heritage.</p>
      <p>Rome is a city of contrasts, blending modern life with ancient history. It is home to famous landmarks, churches, fountains, and piazzas, making it one of the most popular tourist destinations in the world.</p>
      <img src="assets/rome.jpg" alt="Rome Skyline">
    </div>

    <div class="history">
      <h2>History of Rome</h2>
      <p>Rome's history dates back to its founding in 753 BC. It began as a small city-state and eventually became the heart of the Roman Empire, which dominated much of Europe, North Africa, and the Middle East for centuries.</p>
      <p>The city has seen the rise and fall of empires, the spread of Christianity, and the influence of Renaissance art. Today, Rome is Italy’s political and cultural center, with a rich heritage visible in its architecture and museums.</p>
      <img src="assets/historicrome.jpeg" alt="Historic Rome">
    </div>

  </div>

</body>
</html>
