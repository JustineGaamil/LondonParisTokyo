<!DOCTYPE html>
<html lang="en">
<head>
  <title>Paris</title>
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
    <h1>Paris</h1>

    <h2>Famous Landmarks in Paris</h2>

    <div class="landmarks">
      <div>
        <h3>Eiffel Tower</h3>
        <img src="assets/eiffeltower.jpg" alt="Eiffel Tower">
        <p>The Eiffel Tower is a wrought-iron lattice tower on the Champ de Mars in Paris. It was designed by engineer Gustave Eiffel and has become a global cultural icon of France.</p>
      </div>
      <div>
        <h3>Louvre Museum</h3>
        <img src="assets/louvremuseum.jpg" alt="Louvre Museum">
        <p>The Louvre Museum is the world's largest art museum and a historic monument in Paris. It is home to thousands of works of art, including the famous Mona Lisa.</p>
      </div>
      <div>
        <h3>Notre-Dame Cathedral</h3>
        <img src="assets/notredame.jpeg" alt="Notre-Dame Cathedral">
        <p>Notre-Dame de Paris is a medieval Catholic cathedral on the Île de la Cité in Paris. It is considered one of the finest examples of French Gothic architecture.</p>
      </div>
    </div>

    <div class="intro">
      <p>Paris is the capital city of France and one of the most visited cities in the world. Known for its art, history, and architecture, it has a metropolitan population of over 11 million people.</p>
      <p>Situated on the River Seine, Paris has been a major center for art, fashion, and culture for centuries. It's home to iconic landmarks, museums, and beautiful gardens.</p>
      <img src="assets/parisview.jpg" alt="Paris Skyline">
    </div>

    <div class="history">
      <h2>History of Paris</h2>
      <p>Paris has a history that dates back over 2,000 years, beginning as a small settlement by the Parisii tribe in the 3rd century BC. Over the centuries, Paris has become a center of art, philosophy, and politics.</p>
      <p>The city played a central role during the French Revolution and later became a hub of modern art and culture. Today, Paris continues to be a global leader in politics, business, fashion, and entertainment.</p>
      <img src="assets/historyparis.jpg" alt="Historic Paris">
    </div>

  </div>

</body>
</html>
