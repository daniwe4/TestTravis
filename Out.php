<?php

class Out
{
	public function getHeader($title)
	{
		return "<!DOCTYPE html><html><head><title>$title</title></head>";
	}

	public function getBody($text)
	{
		return "<body>$text</body></html>";
	}
}