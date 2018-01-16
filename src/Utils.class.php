<?php 

/**
 ** Utils class
 **
 ** @author Cyril COLINET
 ** @version 2.0
 ** @since 1.0
 **/
class Utils {

	/**
	 ** Public check_help function.
	 ** Check if the help flag is present, and display
	 ** the help of this poject
	 **
	 ** @param (array) $argv
	 **/
	public function check_help($argv) {
		$args = count($argv);

		if ($args == 2 && $argv[1] == "-h") {
			printf("USAGE:\n\t./105torus [-v,--verbose,-f,--func] opt a0 a1 a2 a3 a4 n\n\n");
			printf("DESCRIPTION:\n");
			printf("\t-v, --verbose\tVerbose mode (debug)\n");
			printf("\t-f, --func\tDisplay function at the end of iterations\n");
			printf("\topt\t\tMethod number (0: bisection, 1: newton, 2: secant)\n");
			printf("\ta(i)\t\tCoefficients of the equation\n");
			printf("\tn\t\tPrecision (meaning the application of the polynomial\n");
			printf("\t\t\tto the solution should be smaller than 10^-n)\n");
		}
	}

	/**
	 ** Public check_flags function.
	 ** Check the verbose, func, and if the amount if correct
	 ** and don't exceed the maximum of arguments.
	 **
	 ** @param (array) $argv
	 **/
	public function check_flags($argv) {
		$args = count($argv);

		if ($args == 9 && ($argv[1] == "-v" || $argv[1] == "--verbose")) {
			$start++;
			$verbose = true;
			printf("Verbose mode actived.\n");
		} else if ($args == 9 && ($argv[1] == "-f" || $argv[1] == "--func")) {
			$start++;
			$disp_func = true;
		} else if ($args != 8) {
			printf("Too much/less arguments. Only 7 (or 8) arguments needed.\n");
			exit(84);
		}
	}

}