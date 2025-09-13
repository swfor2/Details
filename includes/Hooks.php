<?php

declare( strict_types=1 );

namespace MediaWiki\Extension\Components;

use MediaWiki\Hook\ParserFirstCallInitHook;
use Parser;

class Hooks implements ParserFirstCallInitHook {
	/**
	 * @see https://www.mediawiki.org/wiki/Manual:Hooks/ParserFirstCallInit
	 *
	 * @param Parser $parser
	 */
	public function onParserFirstCallInit( $parser ): void {
		$parser->setHook( 'article', Article::class . '::parserHook' );
		$parser->setHook( 'main', Main::class . '::parserHook' );
		$parser->setHook( 'thead', tableHead::class . '::parserHook' );
		$parser->setHook( 'tbody', tableBody::class . '::parserHook' );
		$parser->setHook( 'tfoot', tableFoot::class . '::parserHook' );
		$parser->setHook( 'grid', Grid::class . '::parserHook' );
		$parser->setHook( 'a', Link::class . '::parserHook' );
	}
}
