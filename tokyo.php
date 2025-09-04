<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tokyo</title>
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
    <h1>Tokyo</h1>

    <h2>Famous Landmarks in Tokyo</h2>

    <div class="landmarks">
      <div>
        <h3>Tokyo Tower</h3>
        <img src="assets/tokyotower.jpg" alt="Tokyo Tower">
        <p>Tokyo Tower is a communications and observation tower in the Shiba-koen district of Minato. It is inspired by Paris's Eiffel Tower and offers breathtaking views of the city from its observation decks.</p>
      </div>
      <div>
        <h3>Senso-ji Temple</h3>
        <img src="assets/sensoji.jpg" alt="Senso-ji Temple">
        <p>Senso-ji is Tokyo's oldest and most famous temple, located in Asakusa. It attracts millions of visitors every year and is known for its vibrant red pagoda and the iconic Kaminarimon gate.</p>
      </div>
      <div>
        <h3>Shibuya Crossing</h3>
        <img src="assets/shibuya.jpeg" alt="Shibuya Crossing">
        <p>Shibuya Crossing is one of the busiest pedestrian crossings in the world, located outside Shibuya Station. It symbolizes the hustle and bustle of Tokyo's city life and is an iconic scene in Tokyo's pop culture.</p>
      </div>
    </div>

    <div class="intro">
      <p>Tokyo is the capital city of Japan and one of the most populous urban areas in the world, with over 37 million people in the Greater Tokyo Area.</p>
      <p>Known for its cutting-edge technology, rich history, and cultural heritage, Tokyo offers a perfect mix of traditional and modern elements, from serene temples to futuristic skyscrapers.</p>
      <img src="assets/tokyo.jpg" alt="Tokyo Skyline">
    </div>

    <div class="history">
      <h2>History of Tokyo</h2>
      <p>Tokyo, originally a small fishing village named Edo, became the seat of power for the Tokugawa shogunate in the 17th century. Following the Meiji Restoration in 1868, it became the capital of Japan and has since grown into one of the most influential cities in the world.</p>
      <p>Tokyo was significantly impacted by events such as World War II and the 1923 Great Kanto Earthquake. Today, it stands as a global center for finance, technology, and culture.</p>
      <img src="assets/historictokyo.jpg" alt="Historic Tokyo">
    </div>

  </div>

</body>
</html>
