<!DOCTYPE html>
<html lang="en">
<head>
  <title>Hongkong</title>
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
      width: 70%;
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

    /* Adjust Intro and History Images to be smaller */
    .intro img, .history img {
      width: 100%; /* Set width to 50% */
      max-width: 100%; /* Ensure max width is 50% */
      border-radius: 10px;
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
      margin-top: 20px;
      margin-bottom: 20px;
    }

    @media (max-width: 768px) {
      .landmarks div {
        flex: 1 1 100%;
      }
    }

  </style>
</head>
<body>

   <h1>Hong Kong</h1>

  <div class="content">
    <h2>Famous Landmarks in Hong Kong</h2>
    <div class="landmarks">
      <div>
        <h3>Victoria Peak</h3>
        <img src="assets/victoriapeak.jpg" alt="Victoria Peak">
        <p>Victoria Peak is the highest point in Hong Kong. It offers breathtaking views of the city's skyline, Victoria Harbour, and surrounding islands.</p>
      </div>
      <div>
        <h3>Hong Kong Disneyland</h3>
        <img src="assets/disneylandhk.jpg" alt="Hong Kong Disneyland">
        <p>Hong Kong Disneyland is a magical theme park located on Lantau Island. It brings Disney's beloved characters to life in a unique Asian setting.</p>
      </div>
      <div>
        <h3>Temple Street Night Market</h3>
        <img src="assets/templestreet.jpg" alt="Temple Street Night Market">
        <p>Temple Street is a bustling street market where you can find street food, local goods, and trinkets. It's a perfect spot for an authentic local experience.</p>
      </div>
    </div>

    <h2>Intro to Hong Kong</h2>
    <p>Hong Kong is a vibrant city known for its impressive skyline, cultural fusion, and bustling harbor. It has a population of over 7 million people and is a global financial hub.</p>
    <p>The city is famous for its unique blend of Eastern and Western influences, as well as its iconic skyscrapers and scenic views.</p>
    <img src="assets/hk.jpg" alt="Hong Kong Skyline">

    <h2>History of Hong Kong</h2>
    <p>Hong Kong was a British colony from 1842 until 1997, when it was handed back to China. It has since become a Special Administrative Region with its own laws and economic system.</p>
    <p>The city has grown into a global financial and business center and is known for its rich cultural heritage, dynamic economy, and thriving tourism industry.</p>
    <img src="assets/hk_history.jpg" alt="Historic Hong Kong">
  </div>

</body>
</html>
