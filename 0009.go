package main

import (
	"fmt"
	"strconv"
)

func main() {
	fmt.Println(isPalindrome(121))
	fmt.Println(isPalindrome(-121))
	fmt.Println(isPalindrome(10))
}

func isPalindrome(x int) bool {
	if x < 0 {
		return false
	}

	str := strconv.Itoa(x)
	reverse := ""
	for i := len(str) - 1; i >= 0; i-- {
		reverse += str[i : i+1]
	}

	return str == reverse
}
