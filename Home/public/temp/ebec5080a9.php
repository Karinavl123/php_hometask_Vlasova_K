<?php

use Latte\Runtime as LR;

/** source: index.tpl */
final class Templateebec5080a9 extends Latte\Runtime\Template
{

	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo 'My name is  ';
		echo LR\Filters::escapeHtmlText($firstname) /* line 1 */;
		echo ' ';
		echo LR\Filters::escapeHtmlText($lastname) /* line 1 */;
		echo '.';
	}
}
