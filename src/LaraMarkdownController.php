<?php

namespace Pforret\LaraMarkdownController;

abstract class LaraMarkdownController
{
	public function index(){
	}

	public function show(string $slug){
	}

	protected function setViewsRoot(string $folder): void
	{
	}

	protected function setMarkdownRoot(string $folder): void
	{
	}

}
