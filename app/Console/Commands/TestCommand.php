<?php

namespace App\Console\Commands;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Exception;
use Illuminate\Console\Command;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admin:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Test the application';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Create a user with name = 'Silas'
        //$this->createUser([ 'name' => 'Silas' ]);

        // Search all products in category #1
        // $categoryProducts = $this->searchCategoryProducts(1);
        // dd($categoryProducts);

        // Search all products with price greater than 500
        //$products = Product::priceGreaterThan(500)->get();
        //dd($products)

        // Verify prime number
        $isPrime = $this->isPrime(2);
        dd($isPrime);
    }

    /**
     * Search products of a category and return an desc ordered array
     *
     * @param int $categoryId
     *
     * @return array
     */
    private function searchCategoryProducts (int $categoryId) : array
    {
        $category = Category::where("id", $categoryId);
        if (!$category) {
            throw new Exception("Category not found.");
        }
        return
            Product::where("category_id", $categoryId)
                ->orderByDesc("price")
                ->get()
                ->values()
                ->toArray();
    }

    /**
     * Create and return an user from $data
     *
     * @param array $data
     *
     * @return User
     */
    private function createUser (array $data) : User
    {
        if (empty($data)) {
            throw new Exception("Bad request while creating user.");
        }
        return User::create($data);
    }

    /**
     * Check if a number is prime or not
     *
     * @param int $number
     *
     * @return bool
     */
    private function isPrime (int $number) : bool
    {
        if ($number === 1) {
            return false;
        }
        $highestIntegralSquareRoot = floor(sqrt($number));
        for ($i = 2; $i <= $highestIntegralSquareRoot; $i++)
        {
            if ($number % $i === 0)
            {
                return false;
            }
        }
        return true;
    }
}
