<?php
/**
 * @package videoGameQuotes
 * @version 1.0.0
 */
/*
Plugin Name: Video Game Quotes
Plugin URI: http://wordpress.org/plugins/video-game-quotes/
Description: Gives you a video game quote
Author: Christopher Bergstrom
Version: 1.0.0
Author URI: http://christopherbergstrom.com/
*/

function getVideoGameQuote() {
	$quotes = '"Wisdom is the offspring of Suffering and Time." -Emperor Izaro, Path of Exile
	"We are the sum of our deeds, not our names." -Ramza Beoulve, Final Fantasy Tactics: The War of the Lions
	“If our lives are already written, it would take a courageous man to change the script.” -Alan Wake, Alan Wake
	"A hunter is a hunter, even in a dream." -Micolash, Host of the Nightmare, Bloodborne
	"What good is an intellect if you can\'t use it?" -Raiden, Metal Gear Rising: Revengeance
	"I looked for the truth. Found it. Didn\'t like it. Wish to hell I could forget it." -Alex Mercer, Prototype
	"Technologies are invented to make our lives easier -- not our choices." -Adam Jensen, Deus Ex: Human Revolution
	"Dream, not of what you are, but of what you want to be." -Margulis, Warframe
	"It is a sign of strength, to cry out against fate, rather than to bow one\'s head and succumb." -Gabriel Angelos, Warhammer 40,000: Dawn of War II
	"Hatred and prejudice will never be eradicated. And the witch hunts will never be about witches. To have a scapegoat, that\'s the key." -Geralt of Rivia, The Witcher 3: Wild Hunt
	"I may be but small, but I will die a colossus." -Ludleth of Courland, Dark Souls III
	"As life ebbs, terrible vistas of emptiness reveal themselves." -The Narrator, Darkest Dungeon
	“The right man in the wrong place can make all the difference in the world.” -G-Man, Half-Life 2
	"Only under light does a flower bloom with beauty. A flower tainted with darkness is fated to wither away." -Endrance, .hack//G.U.
	"Curiosity is essential to carving your own path through life. Get too curious, though, and it\'ll be a short walk." -Luxord, Kingdom Hearts 358/2 Days
	"A man chooses, a slave obeys." -Andrew Ryan, Bioshock
	"Nobody knows what\'s gonna happen at the end of the line, so you might as well enjoy the trip." -Manuel "Manny" Calavera, Grim Fandango
	"Closing your eyes forces you to look at the darkness inside." -Max Payne, Max Payne 2: The Fall of Max Payne
	"Machines aren\'t capable of evil. Humans make them that way." -Lucca, Chrono Trigger
	"The moment you close your eyes on the battlefield is the moment you never open them again." -The End, Metal Gear Solid 3: Snake Eater
	"You see, at this point... I\'m pretty much the Queen Bitch of the Universe." -The Queen of Blades, Starcraft: Brood War
	"Six billion cries of agony will birth a new balance. Unfortunately you will not live to see the dawn." -Albert Wesker, Resident Evil 5
	"After all we\'ve been through. Everything that I\'ve done. It can\'t be for nothing." -Ellie, The Last of Us
	"There\'s nothing as dangerous as a crowd with the wrong idea." -Edér Teylecg, Pillars of Eternity
	"I can\'t tell you to remember me, but I can\'t bear for you to forget me." -Mary, Silent Hill 2
	"The weak suffer. I endure." -The Transcendent One, Planescape: Torment
	"The most horrible thing about death is how it turns a person into a thing. It\'s a thing that looks like your friend, but it\'s not them anymore." -Sigma, Zero Escape: Virtue\'s Last Reward
	"Remember those who have passed, and they will forever live on" -Sein, Ori and the Blind Forest
	"I believe in a universe that doesn\'t care and people who do" -Angus Delaney, Night in the Woods
	"The hardest battles are fought in the mind, not with the sword." -Dillion, Hellblade: Senua\'s Sacrifice
	"No matter who you are, bearing too much weight... Inevitably leads to the collapse of everything." -Don Juan, Hotline Miami
	"Beauty is only skin deep and that bitch has no skin." -Garcia Hotspur, Shadows of the Damned
	"Trust not a man who has betrayed his master, nor take him into your own service, lest he betray you too." -The Prince, Prince of Persia
	"Some people are born to be monsters. Some jobs, only a monster can do." -Billiken, Yakuza 0
	"War is where the young and stupid are tricked by the old and bitter into killing each other." -Niko Bellic, Grand Theft Auto IV
	"You don\'t have to save the world to find meaning in life... Sometimes, all you need is something simple, like someone to take care of." -Aigis, Persona 3
	"Force answers force, war breeds war, and death only brings death. To break this vicious circle one must do more than act without any thought or doubt." -Khan, Metro 2033
	"They say... hope begins in the dark. But most just flail around in the blackness searching for their destiny. The darkness, for me, is where I shine." -Riddick, The Chronicles of Riddick: Assault on Dark Athena
	"Men are but flesh and blood. They know their doom, but not the hour." -Uriel Septim VII, The Elder Scrolls IV: Oblivion
	"Vengeance does not dull pain. It sustains it.... forever." -Celebrimbor, Middle-earth: Shadow of Mordor
	"When the weak court death, they find it." -Grigori, Dragon\'s Dogma: Dark Arisen
	"Even the good leaders make poor decisions, its the best leaders that take responsibility for them." -Kratos, God of War
	"A wife can make you twice the man you were on your own." -Bak, The Banner Saga 2
	"Too many people have opinions on things they know nothing about. And the more ignorant they are, the more opinions they have." -Thomas Hildern, Fallout: New Vegas
	“It’s a funny thing, ambition. It can take one to sublime heights or harrowing depths. And sometimes they are one and the same.” -Emily Kaldwin, Dishonored 2
	"A strong man doesn\'t need to read the future. He makes his own." -Solid Snake, Metal Gear Solid
	"The healthy human mind doesn\'t wake up in the morning thinking this is its last day on Earth. But I think that\'s a luxury, not a curse. To know you\'re close to the end is a kind of freedom." -Captain Price, Call of Duty: Modern Warfare
	"Courage need not be remembered, for it is never forgotten." -Princess Zelda, Legend of Zelda: Breath of the Wild
	"Excellence isn\'t an art, it\'s a habit. We are what we repeatedly do." -The Edge, Furi
	"Part of growing up is doing what\'s best for the people you care about, even if sometimes, that means hurting someone else." -Lee Everett, The Walking Dead
';

	// Here we split it into lines.
	$quotes = explode( "\n", $quotes );

	// And then randomly choose a line.
	return wptexturize( $quotes[ mt_rand( 0, count( $quotes ) - 1 ) ] );
}

// This just echoes the chosen line, we'll position it later.
function quote() {
	$chosen = getVideoGameQuote();
	$lang   = '';
	if ( 'en_' !== substr( get_user_locale(), 0, 3 ) ) {
		$lang = ' lang="en"';
	}

	printf(
		'<p id="vgQuote"><span class="screen-reader-text">%s </span><span dir="ltr"%s>%s</span></p>',
		__( 'Video Game Quote:', 'video-game-quote' ),
		$lang,
		$chosen
	);
}

// Now we set that function up to execute when the admin_notices action is called.
add_action( 'admin_notices', 'quote' );

// We need some CSS to position the paragraph.
function quote_css() {
	echo "
	<style type='text/css'>
	#vgQuote {
		float: right;
		padding: 5px 10px;
		margin: 0;
		font-size: 13px;
		font-weight: bold;
		line-height: 1.6666;
	}
	.rtl #vgQuote {
		float: left;
	}
	.block-editor-page #vgQuote {
		display: none;
	}
	@media screen and (max-width: 782px) {
		#vgQuote,
		.rtl #vgQuote {
			float: none;
			padding-left: 0;
			padding-right: 0;
		}
	}
	</style>
	";
}

add_action( 'admin_head', 'quote_css' );
