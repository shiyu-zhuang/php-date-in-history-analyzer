-- phpMyAdmin SQL Dump
-- version 4.6.5.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 21, 2017 at 12:43 AM
-- Server version: 5.6.34
-- PHP Version: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `midterm_1531`
--

-- --------------------------------------------------------

--
-- Table structure for table `disney_history`
--

CREATE TABLE `disney_history` (
  `disney_history_date` date NOT NULL,
  `disney_history_id` int(4) UNSIGNED NOT NULL,
  `disney_history_image` varchar(200) NOT NULL,
  `disney_history_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `disney_history`
--

INSERT INTO `disney_history` (`disney_history_date`, `disney_history_id`, `disney_history_image`, `disney_history_content`) VALUES
('1923-10-16', 1, 'img/walt.png', 'Disney was founded on October 16, 1923 – by brothers Walt Disney and Roy O. Disney – as the Disney Brothers Cartoon Studio, and established itself as a leader in the American animation industry before diversifying into live-action film production, television, and theme parks.'),
('1923-01-01', 2, 'img/hollywood.png', 'Deciding to go to Hollywood to open an animation studio, Walt recruits Roy to accompany him. They, along with Ub and other animators, form a small studio and make the Alice Comedies, combining live action with animation. They form a partnership with Margaret Winkler to make the comedies.'),
('1928-11-18', 3, 'img/mickeymouse.png', 'In 1928, to recover from the loss of Oswald the Lucky Rabbit, Disney came up with the idea of a mouse character named Mortimer while on a train headed to California, drawing up a few simple drawings. The mouse was later renamed Mickey Mouse (Disney\'s wife, Lillian, disliked the sound of \'Mortimer Mouse\') and starred in several Disney produced films. Ub Iwerks refined Disney\'s initial design of Mickey Mouse.[6] Disney\'s first sound film Steamboat Willie, a cartoon starring Mickey, was released on November 18, 1928[ChWDC 3] through Pat Powers\' distribution company.[6] It was the first Mickey Mouse sound cartoon released, but the third to be created, behind Plane Crazy and The Gallopin\' Gaucho.[ChWDC 3] Steamboat Willie was an immediate smash hit, and its initial success was attributed not just to Mickey\'s appeal as a character, but to the fact that it was the first cartoon to feature synchronized sound.[6] '),
('1941-05-29', 4, 'img/wage.png', 'Due to the rise of labour unions in the 1930s, Walt had to start cutting back wages for his animators. Eventually, the leader the Screen Cartoonists\' Guild, Herbert Sorrell, and disgruntled animator Art Babbitt started an animators strike which lasted five weeks. Walt\'s view of all of his employees being a big family was shattered and numerous animators were either fired or left.'),
('1955-07-17', 5, 'img/disney.png', 'Disneyland in Anaheim, California opens, with the opening ceremony covered by ABC. The day was a near disaster – the temperature was high, too many guests were in the park due to phony ticket sales, rides broke down and a gas leak caused half the park to close. It has since become the most popular amusement park in the world.'),
('1963-12-15', 6, 'img/stone.png', 'The Sword in the Stone is released. The Sherman Brothers made their first contribution to Disney.'),
('2006-05-05', 7, 'img/pixar.png', ' On January 23, 2006, it was announced that Disney would purchase Pixar in an all-stock transaction worth $7.4 billion. The deal was finalized on May 5; and among noteworthy results was the transition of Pixar\'s CEO and 50.1% shareholder, Steve Jobs, becoming Disney\'s largest individual shareholder at 7% and a member of Disney\'s Board of Directors.'),
('2012-10-30', 8, 'img/starwar.png', 'Disney announced plans to acquire Lucasfilm, along with plans to produce a seventh installment in its Star Wars franchise for 2015.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `disney_history`
--
ALTER TABLE `disney_history`
  ADD PRIMARY KEY (`disney_history_id`),
  ADD KEY `disney_history_image` (`disney_history_image`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `disney_history`
--
ALTER TABLE `disney_history`
  MODIFY `disney_history_id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;