-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2022 at 12:40 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recipe_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(11) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `Email`, `Password`) VALUES
(1, 'Sanan@gmail.com', 'sanan123');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `BackgroundImage` varchar(1000) NOT NULL,
  `CategoryIcon` varchar(1000) NOT NULL,
  `Description` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Id`, `Name`, `BackgroundImage`, `CategoryIcon`, `Description`) VALUES
(8, 'Cocktails', 'images/cocktailsbg.png', 'images/rockt.png', 'Pharetra ac neque, non diam, nisl volutpat facilisis facilisi. Ipsum et enim integer rhoncus aliquam. Cursus euismod diam adipiscing egestas eget egestas magnis blandit lobortis.'),
(9, 'Cocoa', 'images/cocktailsbg.png', 'images/Brands.png', 'Pharetra ac neque, non diam, nisl volutpat facilisis facilisi. Ipsum et enim integer rhoncus aliquam. Cursus euismod diam adipiscing egestas eget egestas magnis blandit lobortis.'),
(10, 'Non - Alcholic Beverage', 'images/cocktailsbg.png', 'images/Brands.png', 'Pharetra ac neque, non diam, nisl volutpat facilisis facilisi. Ipsum et enim integer rhoncus aliquam. Cursus euismod diam adipiscing egestas eget egestas magnis blandit lobortis. '),
(11, 'Legumes & Vegetables', 'images/cocktailsbg.png', 'images/Brands.png', 'Pharetra ac neque, non diam, nisl volutpat facilisis facilisi. Ipsum et enim integer rhoncus aliquam. Cursus euismod diam adipiscing egestas eget egestas magnis blandit lobortis.'),
(12, 'Pasta', 'images/cocktailsbg.png', 'images/Brands.png', 'Pharetra ac neque, non diam, nisl volutpat facilisis facilisi. Ipsum et enim integer rhoncus aliquam. Cursus euismod diam adipiscing egestas eget egestas magnis blandit lobortis.'),
(13, 'Coconuts', 'images/cocktailsbg.png', 'images/Brands.png', 'Pharetra ac neque, non diam, nisl volutpat facilisis facilisi. Ipsum et enim integer rhoncus aliquam. Cursus euismod diam adipiscing egestas eget egestas magnis blandit lobortis.'),
(14, 'Biscuits', 'images/cocktailsbg.png', 'images/Brands.png', 'Pharetra ac neque, non diam, nisl volutpat facilisis facilisi. Ipsum et enim integer rhoncus aliquam. Cursus euismod diam adipiscing egestas eget egestas magnis blandit lobortis.');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` varchar(30) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`Id`, `Name`, `Email`, `Phone`, `Subject`, `Message`) VALUES
(2, 'Testing Again One', 'sanan@gmail.com', '32323232', 'Testing Message', 'sdfsdfsfsfsd'),
(3, 'Testing Again One', 'sanan@gmail.com', '32323232323', 'Testing Message', 'This is a test message sent from the app');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Id` int(11) NOT NULL,
  `Name` varchar(300) NOT NULL,
  `BrandIcon` varchar(1000) NOT NULL,
  `SKU` varchar(30) NOT NULL,
  `PrimaryImage` varchar(1000) NOT NULL,
  `SecondaryImage` varchar(100) NOT NULL,
  `Pack` varchar(50) NOT NULL,
  `CasesPerPallet` int(11) NOT NULL,
  `CasesPerContainer` int(11) NOT NULL,
  `ShelfLife` varchar(30) NOT NULL,
  `PrimaryDescription` varchar(2000) NOT NULL,
  `SecondaryDescription` varchar(1000) NOT NULL,
  `ReasonOne` varchar(1000) NOT NULL,
  `ReasonTwo` varchar(1000) NOT NULL,
  `ReasonThree` varchar(1000) NOT NULL,
  `CategoryId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Id`, `Name`, `BrandIcon`, `SKU`, `PrimaryImage`, `SecondaryImage`, `Pack`, `CasesPerPallet`, `CasesPerContainer`, `ShelfLife`, `PrimaryDescription`, `SecondaryDescription`, `ReasonOne`, `ReasonTwo`, `ReasonThree`, `CategoryId`) VALUES
(11, 'Coconut Oil', 'images/Brands.png', 'SKU-201', 'images/virgin coconut oil jar.png', 'images/Ellipse 23.png', '24 x 250ml', 160, 3192, '24 Months', 'Coconut oil is an edible oil derived from the wick, meat, and milk of the coconut palm fruit.\r\nCoconut oil is a white solid fat; in warmer climates during the summer months it is a clear\r\nthin liquid oil, melting at warmer room temperatures of around 25 °C. Unrefined varieties\r\nhave a distinct coconut aroma.', 'Coconut Oil', 'Coconuts contain a lipid called lauric acid which has antimicrobial and anti- inflammatory properties, suggesting they may help support the immune system.', 'Coconut oil can help reduce “bad” cholesterol levels and raise “good” cholesterol levels in people with high cholesterol, thereby reducing the risk of heart attack and stroke.', 'Coconut oil may help moisturize your skin and improve skin barrier function.', 13),
(12, 'Coconut Milk', 'images/Brands.png', 'SKU-202', 'images/Coconut Milk.png', 'images/coconutmilksecondary.png', '12 X 326g', 176, 4000, '36 Months', 'Coconut milk comes from the white flesh of mature brown coconuts, which are the fruit of\r\nthe coconut tree. The milk has a thick consistency and a rich, creamy texture. The opacity\r\nand rich taste of coconut milk are due to its high oil content, most of which is saturated fat.\r\nCoconut milk is a traditional food ingredient used in Southeast Asia, Oceania, South Asia,\r\nand East Africa.', 'Coconut Milk', 'Coconut milk is lactose-free, so can be used as a milk substitute for those with lactose intolerance.', 'The phenolic content in coconut could help protect lipids, proteins, and DNA in the body from damage due to oxidative stress.', 'Coconut milk contains a type of fat called medium-chain triglycerides (MCTs), which may help promote weight loss by decreasing appetite and increasing energy.', 13),
(13, 'Coconut Cream', 'images/Brands.png', 'SKU-203', 'images/Coconut Cream.png', 'images/coconutcream.png', '12 X 326g', 176, 4000, '36 Months', 'Coconut cream is a type of thick cream made from coconut milk. It has a distinct, coconut-\r\nlike flavor with a rich, creamy texture that makes it a great addition to a range of recipes,\r\nincluding soups, smoothies, and desserts. It’s also widely used in many types of cuisine and\r\nis considered a staple in several Southeast Asian countries. Because it’s unsweetened, low in\r\ncarbs, and dairy-free, it’s also frequently featured in many vegan and ketogenic recipes.', 'Coconut Cream', 'Adding coconut cream to your diet can bump up your intake of potassium, an essential nutrient that plays a key role in fluid balance and blood pressure levels.', 'Coconut cream may help protect the lining of your stomach from irritants that make ulcers worse.', 'Coconut cream is a rich source of B vitamins which help form red blood cells and turn calories from food into usable energy; they also prevent anemia.', 13),
(14, 'Pure Cocoa powder', 'images/Brands.png', 'SKU-301', 'images/African Cocoa Powder tin.png', 'images/cocoapowder.png', '12 X 900g', 56, 940, '24 Months', 'A Pure cocoa powder, also known as organic cocoa powder or unsweetened cocoa powder\r\nis a healthy food ingredient made from cocoa beans. When cocoa butter is processed, the\r\nchunks of roasted cocoa bean bits left behind are ground into cocoa powder.', 'Pure Cocoa powder', 'Pure cocoa powder contains a healthy amount of caffeine. This helps to boost energy and fight fatigue.', 'It is choc-full of the anti-inflammatory antioxidants flavanols, which have been found to help your heart and your entire cardiovascular system.', 'It contains polyphenols, which have been found to help protect your cells from premature oxidation and this will keep your skin from becoming wrinkled.', 9),
(15, 'Dark Chocolate Bar', 'images/Brands.png', 'SKU-302', 'images/chocolate Bar.png', 'images/darkchco.png', '24 x 250ml', 160, 3192, '24 Months', 'Dark chocolate is bitter and less sweet than milk chocolate with a chalky texture. The more\r\ncocoa, the more pronounced these characteristics are, though even sweet dark chocolate is\r\nnot as sweet or smooth as milk chocolate.', 'Dark Chocolate bar (56% cocoa)', 'It lowers blood pressure.', 'It can increase the metabolism, helping even avid chocoholics to stay trim.', 'Dark chocolate keeps the pituitary gland supplied with magnesium, which helps it function properly and lowers the production of cortisol, known as the ‘stress hormone’.', 9),
(16, 'Extra Dark Chocolate Bar', 'images/Brands.png', 'SKU-303', 'images/chocolate Bar.png', 'images/darkchco.png', '24 x 250ml', 160, 3192, '24 Months', 'It&#39;s everything bittersweet chocolate should be. Deep and inviting, with enchanting notes of\r\nbaked brownie, roasted cocoa, and dried fruit. At 72% cocoa content, this bar strikes a\r\nperfect balance of bitter and sweet for most palates.', 'Extra Dark Chocolate bar (72% cocoa)', 'Quality extra dark chocolate is rich in fiber, iron, magnesium, copper, manganese, and a few other minerals.', 'Extra dark chocolate has a wide variety of powerful antioxidants.', 'Extra dark chocolate improves several important risk factors for disease.', 9),
(17, 'Milk Chocolate Bar', 'images/Brands.png', 'SKU-304', 'images/chocolate Bar COCONUT FLAVOURED.png', 'images/darkchco.png', '24 x 250ml', 160, 3192, '24 Months', 'Milk chocolate is a classic that we all know and love from childhood. With its light brown\r\ncolor, creamy texture, and sweet flavor, milk chocolate is widely regarded as the most\r\npopular type of chocolate. It is made by combining chocolate liquor (cocoa solids and cocoa\r\nbutter) with sugar, and milk.', 'Milk Chocolate bar', 'Milk chocolate is useful for keeping anaemia at bay.', 'The stimulant compound found in milk chocolate, hardens tooth enamel more effectively than fluoride. This protects teeth against erosion by acids.', 'It contains magnesium which contribute to better sleep quality.', 9),
(18, 'Fusilli', 'images/Brands.png', 'SKU-401', 'images/Pasta- FUSILLI.png', 'images/pastasec.png', '24 x 250ml', 160, 3192, '24 Months', 'Fusilli are a variety of pasta that are formed into corkscrew or helical shapes. The word\r\nfusilli presumably comes from fuso, as traditionally it is &quot;spun&quot; by pressing and rolling a\r\nsmall rod over the thin strips of pasta to wind them around it in a corkscrew shape. Because\r\nof its twists, it has grooves that are good for holding onto sauce. Fusilli pasta were originally\r\ndeveloped in Southern Italy by rolling and setting fresh spaghetti around thin rods to dry.', 'Fusilli', 'Fusilli has no cholesterol and is very low in sodium and fat.', 'Fusilli tastes great, boosts energy, and can be prepared in countless delicious recipes.', 'It is rich in carbohydrates, essential fats, and other nutrients.', 12),
(19, 'Penne', 'images/Brands.png', 'SKU-402', 'images/Pasta- PENNE.png', 'images/pastasec2.png', '24 x 250ml', 160, 3192, '24 Months', 'Penne is one of the most famous Italian pasta shapes and is loved across Italy and the world.\r\nPenne translates to the word “pen”, and gets its name from its shape – a short cylinder-\r\nshaped pasta that has angled edges. It was intended to imitate the then-ubiquitous fountain\r\npen&#39;s steel nibs. It originates from Campania, a region in Southern Italy.', 'Penne', 'It tastes good and it&#39;s filling.', 'This enriched pasta is fortified with folic-acid – essential for women of child-bearing age.', 'Combine pasta with lean protein and vegetables for a complete meal that puts you well on the path to hitting those dietary goals!', 12),
(20, 'Macaroni', 'images/Brands.png', 'SKU-403', 'images/Pasta- MACARONI.png', 'images/pastathree.png', '24 x 250ml', 160, 3192, '24 Months', 'Macaroni is dry pasta shaped like narrow tubes. Made with durum wheat, macaroni is\r\ncommonly cut in short lengths; curved macaroni may be referred to as elbow macaroni.\r\nMacaroni is only made using the machine as it&#39;s not possible to shape them using your\r\nhands.', 'Macaroni', 'You can create lots of different dishes with it.', 'One cup of macaroni pasta provides good sources of several essential nutrients, including iron and B-vitamins.', 'Macaroni is fortified with vitamin A and supplies your body with the vitality to get through the day.', 12),
(21, 'Premium Spaghetti', 'images/Brands.png', 'SKU-404', 'images/Premium Spaghetti.png', 'images/premium.png', '24 x 250ml', 160, 3192, '24 Months', 'Premium Spaghetti is the quintessential Italian pasta. It is long – like a string (hence the\r\nname, as spago means string) – round in cross-section and made from durum wheat\r\nsemolina. Commercial varieties are generally used, but artisanal versions are easy to find.\r\nThis is the best known pasta shape in the world, so much so that the name is identical in\r\nnearly every language.', 'Premium Spaghetti', 'Carbohydrates like Premium pasta provide glucose, the crucial fuel for your brain and muscles.', 'It can be an excellent addition to a healthful diet, if eaten in moderation.', 'It is a simple and staple food.', 12),
(22, 'Conchiglie', 'images/Brands.png', 'SKU-405', 'images/CONCHIGLIE.png', 'images/chep.png', '24 x 250ml', 160, 3192, '24 Months', 'Conchiglie, commonly known as shells or seashells, is a type of pasta. It is usually sold in\r\nthe plain durum wheat variety, and also in colored varieties which use natural pigments,\r\nsuch as tomato extract, squid ink or spinach extract. The shell shape of the pasta allows the\r\nsauce to adhere to it.', 'Conchiglie', 'It is an authentic pasta that cooks up evenly.', 'It delivers a great taste and ensure an ', 'Its distinctive shape is great for holding chunky sauces beautifully.', 12),
(23, 'Spaghetti', 'images/Brands.png', 'SKU-406', 'images/pasta- SPAGHETTI.png', 'images/Ellipse 23.png', '24 x 250ml', 160, 3192, '24 Months', 'Viverra ultrices diam tellus nunc vitae. Ullamcorper turpis dignissim pharetra et feugiat turpis. Imperdiet a nam in velit sed nulla risus. Ut tempus, sociis at auctor sit commodo suscipit aliquet faucibus. Egestas non suspendisse ullamcorper semper in senectus. Elementum augue ut sit vel.', 'Spaghetti', 'Carbohydrates like Premium pasta provide glucose, the crucial fuel for your brain and muscles.', 'It can be an excellent addition to a healthful diet, if eaten in moderation.', 'It is a simple and staple food.', 12),
(24, 'Digestive', 'images/Brands.png', 'SKU-501', 'images/tante Digestive Biscuit.png', 'images/bs1.png', '20 x 400g', 50, 1350, '12 Months', 'A digestive biscuit, sometimes described as a sweet-meal biscuit, is a semi-sweet biscuit that\r\noriginated in Scotland. The digestive was first developed in 1839 by two Scottish doctors to\r\naid digestion.', 'Digestive', 'It is a high-fiber biscuit which may help you feel full longer and potentially aid weighloss.', 'The fiber content can reduce your risk of heart disease and stroke, and eating more whole grains may lower your risk of developing diabetes.', 'It may aid digestion due to its high fiber content.', 14),
(25, 'Cream Cracker', 'images/Brands.png', 'SKU-502', 'images/crackers for magazine.png', 'images/crackers.png', '20 x 400g', 50, 1350, '12 Months', 'A cream cracker is a flat, dry, crunchy biscuit that is usually square-shaped, savoury and light\r\ngolden brown in colour. They are made from wheat flour and yeast, and are commonly\r\nserved with cheese or other savoury toppings.', 'Cream Cracker', 'Cream crackers are generally low in calories compared to other biscuits.', 'They are usually made with wheat flour or oats, they are a rich source of B-Complex vitamins and dietary fibre.', 'It is the ideal snack to reach out for when you are hungry, as they are a good source of energy.', 14),
(26, 'Rich Tea', 'images/Brands.png', 'SKU-503', 'images/tante Digestive rich tea.png', 'images/rich.png', '20 x 400g', 50, 1350, '12 Months', 'Rich tea is a type of sweet biscuit; the ingredients generally include wheat flour, sugar,\r\nvegetable oil and malt extract. Originally called Tea Biscuits, they were developed in the\r\n17th century in Yorkshire, England as a light snack between full-course meals.', 'Rich Tea', 'It goes perfectly with a cup of tea.', 'It contains no hydrogenated vegetable oil, artificial colours or flavours.', 'It is a perfect balance of sweet and savory.', 14),
(27, 'Shortbread Fingers', 'images/Brands.png', 'SKU-504', 'images/Shortbread Fingers.png', 'images/short.png', '20 x 400g', 50, 1350, '12 Months', 'Shortbread or shortie is a traditional Scottish biscuit usually made from one part white\r\nsugar, two parts butter, and three to four parts plain wheat flour. Unlike many other biscuits\r\nand baked goods, shortbread does not contain any leavening, such as baking powder or\r\nbaking soda.', 'Shortbread Fingers', 'It is a wonderfully rich and buttery biscuit with a melt-in-your-mouth texture.', 'Shortbread does not contain any leavening, such as baking powder or baking soda.', 'It contains various vitamins which play an important role in maintaining healthy digestive system, hair, skin, kidneys and eyes.', 14),
(28, 'Ginger Oat', 'images/Brands.png', 'SKU-505', 'images/tante Ginger oat Biscuit.png', 'images/gingernut.png', '20 x 400g', 50, 1350, '12 Months', 'A gingernut, ginger snap, or ginger biscuit is a biscuit flavored with ginger. Gingernuts are\r\nflavored with powdered ginger and a variety of other spices, most commonly cinnamon,\r\nmolasses and clove.', 'Ginger Oat', 'They are very crunchy and delicious.', 'Gingernut biscuits have anti-inflammatory effects, thereby are important for problems like rheumatoid arthritis, bursitis, ulcerative colitis and bursitis.', 'It also improves the absorption and stimulation of essential nutrients in the body.', 14),
(29, 'Malted Milk', 'images/Brands.png', 'SKU-506', 'images/Malted Milk Biscuits.png', 'images/malted.png', '20 x 400g', 50, 1350, '12 Months', 'The malted milk is a type of biscuit named after their malt flavouring and milk content. The\r\nmalt flavouring is often provided in the form of barley malt extract. The traditional malted\r\nmilk biscuit features a charming countryside scene of a field of cows gently munching on\r\nsome delicious grass. It is typically a traditional British biscuit.', 'Malted Milk', 'They are light and crumbly biscuits packed with milk and malt extract to give that creamy rich malted flavour.', 'Malted milk biscuits incorporates high molasses content rich in iron.', 'Malted milk has one of the lowest amounts of calories per biscuit.', 14),
(30, 'Chopped Tomatoes', 'images/Brands.png', 'SKU-601', 'images/Tantes Chopped Tomatoes.png', 'images/chopped.png', '12 x 326g', 176, 4000, '36 Months', 'Chopped Tomatoes are tomatoes that are finely chopped, and sometimes mixed with\r\ntomato purée for a sauce-like consistency. The texture of these packaged tomatoes is in\r\nbetween that of a smooth purée and a chunky dice. They&#39;re good to use for pasta and pizza\r\nsauces, and soups that need a little texture. They are typically perfect for recipes that call\r\nfor diced tomatoes.', 'Chopped Tomatoes', 'Chopped tomatoes have a powerful antioxidant compound chlorogenic acid, which may lower blood pressure in people with elevated levels.', 'Chopped Tomatoes are a good source of Vitamin C and Vitamin B9 (folate) which is important for normal tissue growth and cell function.', 'Chopped tomatoes are an excellent source to add to your salads to improve your skin; the lycopene protects sunburn and keeps your skin healthy and glowy!', 11),
(31, 'Baked Beans', 'images/Brands.png', 'SKU-601', 'images/Tantes Baked Beans.png', 'images/baked.png', '12 x 326g', 176, 4000, '36 Months', 'Baked beans is a dish traditionally containing white beans that are parboiled and then, in\r\nthe US, baked in sauce at low temperature for a lengthy period. In the United Kingdom, the\r\ndish is sometimes baked, but usually stewed in sauce. Canned baked beans are not baked,\r\nbut are cooked through a steam process.', 'Baked Beans', 'They provide fiber and plant-based protein. They’re also a good source of thiamine, zinc, and selenium, which support energy production, immune function, and thyroid health.', 'They are flavorful and generally well-liked, which may encourage people to eat more legumes.', 'They are quick and easy to prepare — all you have to do is open the can and heat them.', 11),
(32, 'Chickpeas', 'images/Brands.png', 'SKU-602', 'images/Tantes Chickpeas.png', 'images/chick.png', '12 x 326g', 176, 4000, '36 Months', 'The chickpea or chick pea is an annual legume of the family Fabaceae, subfamily Faboideae.\r\nIts different types are variously known as gram or Bengal gram, garbanzo or garbanzo bean,\r\nor Egyptian pea. Chickpea seeds are high in protein.', 'Chickpeas in Water', 'The iron, calcium, and other nutrients in chickpeas can all contribute to healthy bone structure and strength.', 'Chickpeas contains choline, which helps with brain and nervous system function. Choline plays a role in mood, muscle control, learning, and memory.', 'The fiber in chickpeas helps keep the digestive tract healthy and promotes regularity and ease.', 11),
(33, 'Red Kidney Beans', 'images/Brands.png', 'SKU-602', 'images/Tantes Kidney beans.png', 'images/kidney.png', '12 x 326g', 176, 4000, '36 Months', 'The kidney bean is a variety of the common bean. It resembles a human kidney and thus is\r\nnamed after such. Named for their red color and their shape, kidney beans are a type of\r\nlegume that commonly comes in two varieties: light red and dark red. Both kinds tend to be\r\nfirmer than most other kinds of beans, but the light-colored ones are a little softer in texture\r\nthan their darker cousins.', 'Red Kidney Beans', 'Kidney beans are rich in protein.', 'Kidney beans are high in  fiber . They contain substantial amounts of resistant starch, which may play a role in weight management.', 'The starch in beans is a slow-release carb. Its digestion takes longer, and it causes a lower and more gradual rise in blood sugar than other starches, making kidney beans particularly beneficial for people with type 2 diabetes.', 11),
(34, 'Mixed Vegetables', 'images/Brands.png', 'SKU-602', 'images/Tantes Mixed Vegetables.png', 'images/mixed.png', '12 x 326g', 176, 4000, '36 Months', 'Mixed vegetables refer to ready to use combination of cut vegetables. The vegetables\r\nmaybe chopped, sliced, cubed or in juliennes. The typical vegetables included in mixed\r\nvegetables are cauliflower, carrots, cabbage, French beans and peas. These vegetables are\r\nusually mixed together served as it is or else cooked, typically by sautéing.', 'Mixed Vegetables', 'Mixed vegetables have soluble and insoluble fiber. Soluble fiber keeps blood sugar balanced by slowing absorption of carbohydrates. It also lowers cholesterol by carrying it out of the body.', 'The substances that give vegetables their color -- carotenoids -- provide nutrients for your eyes because they’re a form of vitamin A.', 'Mixed vegetables have other antioxidants that fight free radicals. Free radicals are produced as a by-product of essential biochemical processes.', 11),
(35, 'Peeled Plum Tomatoes', 'images/Brands.png', 'SKU-605', 'images/Tantes Peeled Plum tomatoes.png', 'images/peeled.png', '12 x 326g', 176, 4000, '36 Months', 'Plum Peeled Tomatoes comes in a rich tomato juice and is a mixture of diced tomatoes and\r\ntomato puree or paste. They are made from the best quality tomatoe fruits ripened and\r\nsweetened that are grown sun-drenched by local farmers.', 'Peeled Plum Tomatoes', 'It lowers bad cholesterol, also known as LDL, and reduces oxidative stress that may lead to heart strokes.', 'Plum tomatoes can be helpful in improving the protective lining of the blood vessels and help lower any risk of blood clotting.', 'These tomatoes can be helpful in lowering chances of lung, prostate cancer and since it has a high concentration of carotenoids.', 11),
(36, 'Sweet Corn', 'images/Brands.png', 'SKU-605', 'images/Tantes Sweetcorn.png', 'images/sweetcorn.png', '12 x 326g', 176, 4000, '36 Months', 'Sweet corn, also called sugar corn and pole corn, is a variety of maize grown for human\r\nconsumption with a high sugar content. Sweet corn is the result of a naturally occurring\r\nrecessive mutation in the genes which control conversion of sugar to starch inside the\r\nendosperm of the corn kernel. Sweetcorn is also very versatile; it’s been a staple food for\r\ncenturies and it’s a nice addition in soups, salads or as a pizza toping. We can take it straight\r\noff the cob to make popcorn, chips, tortillas, cornmeal, polenta, oil or syrup.', 'Sweet Corn', 'One of the main nutritional benefits of sweetcorn is its high fibre content. And as we know, dietary fibre is important for our health: it aids digestion, it can decrease the risk of heart disease, strokes, type 2 diabetes and bowel cancer. On top of that, fibre helps you stay fuller for longer.', 'Sweetcorn is rich in folate as well, also known as vitamin B9. This nutrient is essential for the wellbeing of our body, especially during pregnancy. Folate contributes to the creation of healthy red blood cells, and to the baby’s development in the womb.', 'Corn is also a good source of vitamin C, a powerhouse vitamin that supports the wellbeing of our immune system as it combats fatigue, stimulates collagen and supports iron absorption.', 11),
(37, 'Garden Peas', 'images/Brands.png', 'SKU-606', 'images/Tantes Garden Peas.png', 'images/garden.png', '12 x 326g', 176, 4000, '36 Months', 'Green peas, or “garden peas,” are the small, spherical seeds that come from pods produced\r\nby the Pisum sativum plant. They have been part of the human diet for hundreds of years\r\nand are consumed all over the world.', 'Garden Peas', 'Peas contain the carotenoids lutein and zeaxanthin. These nutrients help protect your eyes from chronic diseases, such as cataracts and age-related macular degeneration.', 'Peas are rich in coumestrol, a nutrient that plays a role in protecting against stomach cancer.', 'Peas are loaded with fiber and protein, which help to regulate the way you digest starches. The protein and fiber in peas slow the breakdown of carbohydrates and helps to control your blood sugar.', 11),
(38, 'Sparkling Grape Health Drink', 'images/cocktailsIcon.png', 'SKU-101', 'images/Grape drink.png', 'images/grapes.png', '24 x 250ml', 160, 3192, '24 Months', 'Grapefruit drink is the juice from grapefruits. It is rich in vitamin C and ranges from sweet-\r\ntart to very sour. Variations include white grapefruit, pink grapefruit and ruby red grapefruit\r\njuice.', 'Sparkling Grape Health Drink', 'Grapefruit has a high water content, which helps you stay hydrated.', 'The citric acid in grapefruit may help reduce the formation of calcium kidney stones.', 'Grapefruit contains nutrients and antioxidants shown to help protect the heart by regulating blood pressure and cholesterol levels.', 10),
(39, 'Ginger Beer', 'images/cocktailsIcon.png', 'SKU-101', 'images/ginger beer can 2.png', 'images/gingerbeer.png', '24 x 250ml', 160, 3192, '24 Months', 'Ginger beer, beverage, once popular in the United Kingdom, is made by fermenting a\r\nmixture of ginger, water, sugar, cream of tartar, and yeast. Lemon peel and juice or citric\r\nacid may also be added. Ginger beer is bottled before fermentation is complete. It is\r\ncarbonated and mildly alcoholic.', 'Ginger Beer', 'Ginger beer relieves Nausea and Improves Digestion', 'Active compounds found in ginger beer make it a very potent antibacterial agent.', 'Ginger beer contain ginger-related remedies used to reduce inflammation.', 10);

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `Id` int(11) NOT NULL,
  `Name` varchar(1000) NOT NULL,
  `Description` varchar(2000) NOT NULL,
  `PrimaryImage` varchar(1000) NOT NULL,
  `ProductId` int(11) NOT NULL,
  `CategoryId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `recipe_images`
--

CREATE TABLE `recipe_images` (
  `Id` int(11) NOT NULL,
  `ImageLink` varchar(1000) NOT NULL,
  `RecipeId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `recipe_ingredients`
--

CREATE TABLE `recipe_ingredients` (
  `Id` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `RecipeId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `recipe_steps`
--

CREATE TABLE `recipe_steps` (
  `Id` int(11) NOT NULL,
  `Description` varchar(2000) NOT NULL,
  `RecipeId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `CategoryId` (`CategoryId`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `recipe_images`
--
ALTER TABLE `recipe_images`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `recipe_images_ibfk_1` (`RecipeId`);

--
-- Indexes for table `recipe_ingredients`
--
ALTER TABLE `recipe_ingredients`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `RecipeId` (`RecipeId`);

--
-- Indexes for table `recipe_steps`
--
ALTER TABLE `recipe_steps`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `RecipeId` (`RecipeId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `recipe_images`
--
ALTER TABLE `recipe_images`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `recipe_ingredients`
--
ALTER TABLE `recipe_ingredients`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `recipe_steps`
--
ALTER TABLE `recipe_steps`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`CategoryId`) REFERENCES `category` (`Id`);

--
-- Constraints for table `recipe_images`
--
ALTER TABLE `recipe_images`
  ADD CONSTRAINT `recipe_images_ibfk_1` FOREIGN KEY (`RecipeId`) REFERENCES `recipes` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `recipe_ingredients`
--
ALTER TABLE `recipe_ingredients`
  ADD CONSTRAINT `recipe_ingredients_ibfk_1` FOREIGN KEY (`RecipeId`) REFERENCES `recipes` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `recipe_steps`
--
ALTER TABLE `recipe_steps`
  ADD CONSTRAINT `recipe_steps_ibfk_1` FOREIGN KEY (`RecipeId`) REFERENCES `recipes` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
