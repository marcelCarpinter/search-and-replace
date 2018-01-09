<?php

namespace Inpsyde\SearchAndReplace\File;

class UploadedFile extends \SplFileInfo {

	protected $name;

	protected $mime;

	protected $size;

	protected $error;

	public function __construct( $file ) {

		$name = str_replace( '\\', '/', $file[ 'name' ] );
		$pos  = strrpos( $name, '/' );

		$this->name  = FALSE === $pos ? $name : substr( $name, $pos + 1 );
		$this->mime  = $file[ 'type' ] ? : 'application/octet-stream';
		$this->size  = $file[ 'size' ];
		$this->error = $file[ 'error' ] ? : UPLOAD_ERR_OK;

		parent::__construct( $this->name );
	}

	public function name() {

		return $this->name;
	}

	public function mine() {

		return $this->mime;
	}

	public function size() {

		return $this->size;
	}

	public function error() {

		return (int) $this->error;
	}

	public function error_message() {

		$errors = [
			0 => esc_html__(
				'There is no error, the file uploaded with success',
				'search-and-replace'
			),
			1 => esc_html__(
				'The uploaded file exceeds the upload_max_filesize directive in php.ini',
				'search-and-replace'
			),
			2 => esc_html__(
				'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form',
				'search-and-replace'
			),
			3 => esc_html__(
				'The uploaded file was only partially uploaded',
				'search-and-replace'
			),
			4 => esc_html__(
				'No file was uploaded.',
				'search-and-replace'
			),
			6 => esc_html__(
				'Missing a temporary folder.',
				'search-and-replace'
			),
			7 => esc_html__(
				'Failed to write file to disk.',
				'search-and-replace'
			),
			8 => esc_html__(
				'A PHP extension stopped the file upload.',
				'search-and-replace'
			),
		];

		return $errors[ $this->error() ];
	}

}