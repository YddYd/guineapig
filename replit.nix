{ pkgs }: {
	    deps = [
	    pkgs.php
	    pkgs.phpExtensions.curl
	    pkgs.phpExtensions.mbstring
	    pkgs.phpExtensions.pdo
	    pkgs.phpExtensions.opcache
	    pkgs.phpExtensions.imagick
	    pkgs.phpExtensions.mysqli
	    pkgs.phpExtensions.xdebug
	    pkgs.phpPackages.composer
	    pkgs.mysql80
	    ];
}