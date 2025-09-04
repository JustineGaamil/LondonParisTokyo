<!DOCTYPE html>
<html lang="en">
<head>
  <title>Manila</title>
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

    <h1>Manila</h1>

  <div class="content">
    <h2>Famous Landmarks in Manila</h2>
    <div class="landmarks">
      <div>
        <h3>Intramuros</h3>
        <img src="assets/intramuros.jpg" alt="Intramuros">
        <p>Intramuros is the historic center of Manila, known for its old Spanish architecture and colonial history. It houses landmarks like Fort Santiago and San Agustin Church.</p>
      </div>
      <div>
        <h3>Rizal Park</h3>
        <img src="assets/rizalpark.jpg" alt="Rizal Park">
        <p>Rizal Park is a historic urban park where the national hero, Dr. José Rizal, was executed. It's a popular place for relaxation and cultural events.</p>
      </div>
      <div>
        <h3>Manila Cathedral</h3>
        <img src="assets/manilacathedral.jpg" alt="Manila Cathedral">
        <p>The Manila Cathedral is a Roman Catholic cathedral located in the heart of Intramuros. It is an architectural gem with a rich religious history.</p>
      </div>
    </div>

    <h2>Intro to Manila</h2>
    <p>Manila is the capital of the Philippines and one of the oldest cities in the country. It's known for its colonial history, vibrant culture, and bustling urban life.</p>
    <p>The city serves as the political, economic, and cultural center of the Philippines, with over 1.7 million residents.</p>
    <img src="assets/manila.jpg" alt="Manila Skyline">

    <h2>History of Manila</h2>
    <p>Manila was founded in 1571 by the Spanish and has been a major trading hub and center of governance for centuries. It has seen Spanish, American, and Japanese rule, each of which has left its mark on the city's architecture and culture.</p>
    <p>Manila is now a modern metropolis that preserves its historical sites while embracing progress and development.</p>
    <img src="assets/historicmanila.jpg" alt="Historic Manila">
  </div>

</body>
</html>