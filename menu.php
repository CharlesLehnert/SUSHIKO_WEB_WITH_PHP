<?php include 'includes/header.php'; ?>
<div class="menu-navigation">
    <label for="menu-sections">Jump to Menu Section:</label>
    <select id="menu-sections" onchange="navigateToSection(this.value)">
        <option value="">Select a section...</option>
        <option value="#appetizers">Appetizers</option>
        <option value="#sushi-bar">From Sushi Bar</option>
        <option value="#salads-soups">Salads & Soup</option>
        <option value="#signature-rolls">Signature Rolls</option>
        <option value="#traditional-rolls">Traditional Rolls</option>
        <option value="#sushi-combos">Sushi & Sashimi Combo</option>
        <option value="#entrees">Entrees</option>
        <option value="#bibimbap">BiBimBap</option>
        <option value="#fried-rice">Fried Rice</option>
        <option value="#bento-box">Bento Box</option>
        <option value="#ramen">Ramen</option>
    </select>
</div>
<script>
    function navigateToSection(sectionId) {
        if (sectionId) {
            document.querySelector(sectionId).scrollIntoView({ behavior: 'smooth' });
        }
    }
</script>
<section class="menu">
    <h1>Our Menu</h1>

    <!-- Appetizers Section -->
    <div class="menu-section" id="appetizers">
        <h2>Appetizers</h2>
        <ul>
            <li>
                <strong>Edamame</strong> - $6.95<br>
                <em>Asian Soy Beans Seasoned with Salt.</em>
            </li>
            <li>
                <strong>Gyoza</strong> - $7.95<br>
                <em>Traditional Pork or Vegetable Dumplings Pan Cooked with Chili Ponzu Sauce.</em>
            </li>
            <li>
                <strong>Shu-Mai</strong> - $7.95<br>
                <em>Steamed Dim Sum Shrimp Dumpling.</em>
            </li>
            <li>
                <strong>Egg Rolls</strong> - $7.95<br>
                <em>Traditional Pork or Vegetable Egg Rolls Deep Fried with Sweet & Sour Sauce.</em>
            </li>
            <li>
                <strong>Crab Rangoon</strong> - $8.95<br>
                <em>Fresh Crab Meat and Cream Cheese in Wonton Wrapper.</em>
            </li>
            <li>
                <strong>Spicy Garlic Shrimp</strong> - $13.95<br>
                <em>Tiger Shrimp Encrusted with Spicy Garlic Bread Crumbs, Baked with Spicy Mayo, Drizzled with Eel Sauce.</em>
            </li>
            <li>
                <strong>Monkey Brain</strong> - $14.95<br>
                <em>Spicy Tuna, Crab Meat, Wrapped in Avocado, Deep Fried with Spicy Mayo, Eel Sauce, and Crunch.</em>
            </li>
            <li>
                <strong>Jalapeño Popper</strong> - $11.95<br>
                <em>Cream Cheese and Spicy Crab Mix Stuffed Jalapeño, Deep Fried in Tempura Batter, Drizzled with Eel & Spicy Mayo.</em>
            </li>
            <li>
                <strong>Lobster Cigars</strong> - $13.95<br>
                <em>Lobster Mix, Avocado, and Cream Cheese.</em>
            </li>
            <li>
                <strong>Calamari Tempura</strong> - $9.95<br>
                <em>Deep Fried Calamari.</em>
            </li>
            <li>
                <strong>Korean Seafood Green Onion Pancake</strong> - $14.95<br>
                <em>Traditional Korean Style Seafood Pancake with Green Onion.</em>
            </li>
            <li>
                <strong>Korean Kimchi Pancake</strong> - $12.95<br>
                <em>Traditional Korean Style Kimchi Pancake.</em>
            </li>
            <li>
                <strong>Korean Chicken Wings</strong> - $9.95<br>
                <em>3 Pcs Deep Fried Chicken Wings.</em>
            </li>
        </ul>
    </div>

    <!-- From Sushi Bar Section -->
    <div class="menu-section" id="sushi-bar">
        <h2>From Sushi Bar</h2>
        <ul>
            <li>
                <strong>Octopus Ceviche</strong> - $8.95<br>
                <em>Marinated Octopus with Seaweed Salad, Cucumber, Sesame, and Ponzu.</em>
            </li>
            <li>
                <strong>Avocado Ball</strong> - $12.95<br>
                <em>Spicy Crab, Spicy Tuna, Stuffed Avocado, House Ginger Dressing, and Eel Sauce.</em>
            </li>
            <li>
                <strong>Yellowtail Jalapeno</strong> - $13.95<br>
                <em>Thinly Sliced Yellowtail, Jalapeno, Ponzu Sauce, and Sriracha Sauce.</em>
            </li>
            <li>
                <strong>Cucumber Sliders</strong> - $12.95<br>
                <em>Tuna, Salmon, Tai, Crab Stick, Wrapped in Cucumber with Goma Sauce.</em>
            </li>
            <li>
                <strong>Salmon Togarashi</strong> - $14.95<br>
                <em>Seared Salmon Sashimi with Ginger Dressing.</em>
            </li>
            <li>
                <strong>Tuna Tataki</strong> - $13.95<br>
                <em>5 pcs Seared Tuna Sashimi with House Dressing Sauce.</em>
            </li>
            <li>
                <strong>Salmon Tataki</strong> - $12.95<br>
                <em>5 pcs Seared Salmon Sashimi with House Dressing Sauce.</em>
            </li>
        </ul>
    </div>

    <!-- Salads & Soup Section -->
    <div class="menu-section" id="salads-soups">
        <h2>Salads & Soup</h2>
        <ul>
            <li>
                <strong>House Salad</strong> - $5.95<br>
                <em>Spring Mix, Carrots, Red Cabbage, Cherry Tomatoes, and House Ginger Dressing.</em>
            </li>
            <li>
                <strong>Seaweed Salad</strong> - $8.95<br>
                <em>Seaweed Salad, Sesame Seeds, Cucumber, Micro Greens, and Ponzu Sauce.</em>
            </li>
            <li>
                <strong>Goma Salad</strong> - $9.95<br>
                <em>Cucumber, Seaweed Salad, Avocado, Crab Stick, and Sesame Dressing.</em>
            </li>
            <li>
                <strong>Kimchi Salad</strong> - $9.95<br>
                <em>Cucumber, Kimchi, Seaweed Salad, and Mango Salsa.</em>
            </li>
            <li>
                <strong>Miso Soup</strong> - $2.95<br>
                <em>Miso Soup with Tofu, Green Onion, and Seaweed.</em>
            </li>
        </ul>
    </div>

   <!-- Signature Rolls Section -->
<div class="menu-section" id="signature-rolls">
    <h2>Signature Rolls</h2>
    <ul>
        <li>
            <strong>Pink Lady</strong> - $18<br>
            <em>Soy Paper, Crab Meat, Salmon, Cooked Shrimp, Asparagus, Avocado, and House Ginger Dressing Sauce.</em>
        </li>
        <li>
            <strong>Rainbow Roll</strong> - $16<br>
            <em>Crab Meat, Avocado, Cucumber topped with Tuna, Salmon, Shrimp, White Fish, and House Dressing Sauce.</em>
        </li>
        <li>
            <strong>815 (Baked Roll)</strong> - $18<br>
            <em>Crab Meat, Cucumber, Avocado, topped with Spicy Tuna, Salmon, Spicy Crab, Spicy Mayo, and Eel Sauce.</em>
        </li>
        <li>
            <strong>King Dragon Roll</strong> - $17<br>
            <em>Shrimp Tempura, Cucumber, topped with Eel and Avocado, drizzled with Eel Sauce.</em>
        </li>
        <li>
            <strong>Baked Lobster (Deep Fried Roll)</strong> - $21<br>
            <em>Crab Meat, Avocado, Cream Cheese, topped with Baked Lobster, Mango Salsa, Spicy Mayo, Eel Sauce, and Green Onion.</em>
        </li>
        <li>
            <strong>Double Shrimp (Flaming Roll)</strong> - $18<br>
            <em>Shrimp Tempura, Avocado, Cream Cheese, topped with Cooked Shrimp, Spicy Mayo, Wasabi Mayo, and Eel Sauce.</em>
        </li>
        <li>
            <strong>Kamikaze Roll</strong> - $18<br>
            <em>Spicy Salmon, Cucumber, Avocado, topped with Spicy Tuna, Jalapeno, Spicy Mayo, and Eel Sauce.</em>
        </li>
        <li>
            <strong>Beef & Shrimp Roll</strong> - $19<br>
            <em>Shrimp Tempura, Cream Cheese, Asparagus, Avocado, topped with Wagyu Beef, Onion Flakes, and Eel Sauce.</em>
        </li>
        <li>
            <strong>LUV Salmon Roll</strong> - $16<br>
            <em>Spicy Salmon, Avocado, Cucumber, topped with Salmon and Wasabi Mayo.</em>
        </li>
        <li>
            <strong>Samurai Tuna (No Rice)</strong> - $17<br>
            <em>Spicy Crab wrapped in Seared Tuna, Avocado, Spicy Mayo, Eel Sauce, and Micro Greens.</em>
        </li>
        <li>
            <strong>Samurai Salmon (No Rice)</strong> - $16<br>
            <em>Spicy Salmon wrapped in Seared Salmon, Spicy Mayo, Eel Sauce, Green Onion, and Micro Greens.</em>
        </li>
        <li>
            <strong>Flaming Dragon (Flaming Roll)</strong> - $18<br>
            <em>Shrimp Tempura, Cream Cheese, Avocado, topped with Seared Eel, Onion Flakes, and Eel Sauce.</em>
        </li>
        <li>
            <strong>Sunde Roll</strong> - $17<br>
            <em>Shrimp Tempura, Avocado, Cream Cheese, topped with Crab Meat, Spicy Mayo, Wasabi Mayo, and Eel Sauce.</em>
        </li>
        <li>
            <strong>Rockford Roll</strong> - $16<br>
            <em>Spicy Crab, Cream Cheese, Avocado, topped with Seared Salmon and Spicy Mayo.</em>
        </li>
        <li>
            <strong>Rock & Roll (Deep Fried Roll)</strong> - $17<br>
            <em>Mozzarella Cheese, Avocado, Shrimp Tempura, topped with Spicy Crab, Spicy Mayo, and Eel Sauce.</em>
        </li>
        <li>
            <strong>Spicy Garlic Shrimp (Deep Fried Roll)</strong> - $17<br>
            <em>Crab Meat, Avocado, Cream Cheese, topped with Cooked Shrimp, Baked Garlic Panko, Spicy Mayo, Eel Sauce, and Crunch Onion.</em>
        </li>
        <li>
            <strong>State Street Roll</strong> - $16<br>
            <em>Crab Meat, Cucumber, Avocado, topped with Spicy Crab, Spicy Mayo, and Shichimi Powder.</em>
        </li>
        <li>
            <strong>White Dragon (Flaming Roll)</strong> - $18<br>
            <em>Spicy Crab, Spicy Salmon, Avocado, Cream Cheese, topped with Seared White Tuna, Mango Salsa, and Eel Sauce.</em>
        </li>
        <li>
            <strong>MuSa Roll</strong> - $17<br>
            <em>Spicy Tuna, Cream Cheese, Avocado, Asparagus, topped with Seared Spicy Tuna, Eel Sauce, and Spicy Mayo.</em>
        </li>
        <li>
            <strong>Cali Crunch (Deep Fried Roll)</strong> - $16<br>
            <em>Crab Meat, Avocado, Cream Cheese, topped with Crunch and Spicy Mayo, Eel Sauce.</em>
        </li>
        <li>
            <strong>Bulgogi Roll</strong> - $19<br>
            <em>Bulgogi Beef, Jalapeno, Spring Mix, Cucumber, Pickled Radish, Avocado, topped with Mango Salsa.</em>
        </li>
        <li>
            <strong>Spider King Roll</strong> - $18<br>
            <em>Soft Shell Crab, Avocado, Cucumber, Cream Cheese, topped with Spicy Tuna, Spicy Mayo, and Eel Sauce.</em>
        </li>
    </ul>
</div>


    <!-- Traditional Rolls Section -->
  <!-- Traditional Rolls Section -->
<div class="menu-section" id="traditional-rolls">
    <h2>Traditional Rolls</h2>
    <ul>
        <li>
            <strong>California Roll</strong> - $7<br>
            <em>Crab Meat, Avocado, Cucumber.</em>
        </li>
        <li>
            <strong>Spicy Tuna Roll</strong> - $9<br>
            <em>Spicy Tuna and Cucumber.</em>
        </li>
        <li>
            <strong>Spicy Salmon Roll</strong> - $8<br>
            <em>Spicy Salmon and Cucumber.</em>
        </li>
        <li>
            <strong>Spicy Crab Roll</strong> - $8<br>
            <em>Spicy Crab and Cucumber.</em>
        </li>
        <li>
            <strong>Philadelphia Roll</strong> - $9<br>
            <em>Smoked Salmon, Cream Cheese, and Avocado.</em>
        </li>
        <li>
            <strong>Tuna Avocado Roll</strong> - $7<br>
            <em>Tuna and Avocado.</em>
        </li>
        <li>
            <strong>Salmon Avocado Roll</strong> - $7<br>
            <em>Salmon and Avocado.</em>
        </li>
        <li>
            <strong>Avocado Roll</strong> - $5<br>
            <em>Avocado Only.</em>
        </li>
        <li>
            <strong>Eel & Avocado Roll</strong> - $8<br>
            <em>Grilled Eel and Avocado.</em>
        </li>
        <li>
            <strong>Negi Hamachi Roll</strong> - $7<br>
            <em>Yellowtail and Green Onion.</em>
        </li>
        <li>
            <strong>Cucumber Roll</strong> - $5<br>
            <em>Cucumber Only.</em>
        </li>
        <li>
            <strong>Shiitake Mushroom Roll</strong> - $6<br>
            <em>Shiitake Mushrooms Only.</em>
        </li>
        <li>
            <strong>Shrimp Tempura Roll</strong> - $8<br>
            <em>Shrimp Tempura, Avocado, Cucumber, Spicy Mayo, and Eel Sauce.</em>
        </li>
        <li>
            <strong>Alaskan Roll</strong> - $9<br>
            <em>Salmon, Crab Meat, Avocado.</em>
        </li>
        <li>
            <strong>Spider Roll</strong> - $10<br>
            <em>Soft Shell Crab, Avocado, Cucumber.</em>
        </li>
    </ul>
</div>


    <!-- Sushi or Sashimi Combo Section -->
    <div class="menu-section" id="sushi-combos">
        <h2>Sushi or Sashimi Combo</h2>
        <ul>
            <li>
                <strong>Sushi or Sashimi 7 pcs & Spicy Tuna Roll</strong> - $26.95
            </li>
            <li>
                <strong>Sushi or Sashimi 12 pcs & California Roll</strong> - $34.95
            </li>
            <li>
                <strong>For Two Plate</strong> - $59.95<br>
                <em>6 pcs Nigiri, 9 pcs Sashimi, Rainbow Roll, Salmon Roll, Tuna Roll.</em>
            </li>
            <li>
                <strong>Party Plate</strong> - $119.95<br>
                <em>9pcs Nigiri, 15pcs Sashimi and Kamikaze Roll,Shrimp Tempura Roll, Rockford Roll,MuSa Roll.</em>
            </li>
            <!-- Add more combos as needed -->
        </ul>
    </div>

 <!-- Entree Section -->
<div class="menu-section" id="entree">
    <h2>Entree</h2>
    <ul>
        <li>
            <strong>BulGogi (Korean Style Marinated Beef)</strong> - $24.95<br>
            <em>Marinated Short Ribs, Grilled Vegetables, Green Onion, Steam Rice.</em>
        </li>
        <li>
            <strong>Chicken Teriyaki</strong> - $17.95<br>
            <em>Grilled Chicken, Grilled Vegetables, Steam Rice.</em>
        </li>
        <li>
            <strong>Salmon Teriyaki</strong> - $21.95<br>
            <em>Pan Cooked Sashimi Salmon, Grilled Vegetables, Mango Salsa, Steam Rice.</em>
        </li>
        <li>
            <strong>Steak Teriyaki</strong> - $24.95<br>
            <em>Grilled NY Strip Steak, Grilled Vegetables, Mango Salsa, Steam Rice.</em>
        </li>
        <li>
            <strong>Chicken Yakisoba</strong> - $17.95<br>
            <em>Grilled Chicken, Pan Cooked Noodles, Grilled Vegetables.</em>
        </li>
        <li>
            <strong>Steak Yakisoba</strong> - $22.95<br>
            <em>Grilled NY Steak, Pan Cooked Noodles, Grilled Vegetables.</em>
        </li>
    </ul>
</div>

<!-- BiBimBap Section (Korean Style Hot Stone Bowl) -->
<div class="menu-section" id="bibimbap">
    <h2>BiBimBap</h2>
    <p>Rice bowl topped with fresh vegetables, gochujang sauce, and your choice of:</p>
    <ul>
        <li>
            <strong>Bulgogi Beef</strong> - $16.95
        </li>
        <li>
            <strong>Chicken</strong> - $15.95
        </li>
        <li>
            <strong>Spicy Pork</strong> - $15.95
        </li>
        <li>
            <strong>Kimchi & Mozzarella Cheese</strong> - $15.95
        </li>
    </ul>
</div>

<!-- Fried Rice Section -->
<div class="menu-section" id="fried-rice">
    <h2>Fried Rice</h2>
    <ul>
        <li>
            <strong>Fried Rice</strong> - $9.95
        </li>
        <li>
            <strong>Chicken Fried Rice</strong> - $13.95
        </li>
        <li>
            <strong>Bulgogi Beef Fried Rice</strong> - $15.95
        </li>
        <li>
            <strong>Spicy Pork Fried Rice</strong> - $14.95
        </li>
        <li>
            <strong>Bacon & Kimchi Fried Rice</strong> - $15.95
        </li>
    </ul>
</div>

<!-- Bento Box Section -->
<div class="menu-section" id="bento-box">
    <h2>Bento Box</h2>
    <p>Fried Rice, Salad, 2 pcs Fried Veggie Gyoza, 4 pcs Cali Roll</p>
    <ul>
        <li>
            <strong>Chicken Teriyaki Bento</strong> - $19.95
        </li>
        <li>
            <strong>Salmon Teriyaki Bento</strong> - $23.95
        </li>
        <li>
            <strong>Bulgogi Beef Bento</strong> - $23.95
        </li>
    </ul>
</div>

<!-- Ramen Section -->
<div class="menu-section" id="ramen">
    <h2>Ramen</h2>
    <p>Add Spicy Noodles: +$2, California Add: +$4</p>
    <ul>
        <li>
            <strong>Chicken Ramen</strong> - $15.95<br>
            <em>Grilled Chicken, Roasted Corn, Jalapenos, Green Onion, Red Onion, Boiled Egg.</em>
        </li>
        <li>
            <strong>Pork Ramen</strong> - $15.95<br>
            <em>Char Siu BBQ Pork, Roasted Corn, Jalapenos, Green Onion, Red Onion, Boiled Egg.</em>
        </li>
        <li>
            <strong>Miso Ramen</strong> - $15.95<br>
            <em>Pork Bone Miso Soup, Green Onion, Roasted Corn, Pork Belly, Boiled Egg.</em>
        </li>
        <li>
            <strong>Bulgogi Beef Ramen</strong> - $21.95<br>
            <em>Beef Bulgogi, Shiitake Mushrooms, Roasted Corn, Green Onion, Grilled Vegetables, Boiled Egg.</em>
        </li>
        <li>
            <strong>Spicy Seafood Ramen</strong> - $21.95<br>
            <em>Shrimp, Red Snapper, Fried Calamari, Shiitake Mushrooms, Roasted Corn, Green Onion, Grilled Vegetables, Boiled Egg.</em>
        </li>
        <li>
            <strong>Black Garlic Ramen</strong> - $17.95<br>
            <em>Pork Bone Soup, Roasted Black Garlic Oil, Pork Belly, Roasted Corn, Grilled Vegetables, Green Onion, Boiled Egg.</em>
        </li>
    </ul>
</div>
