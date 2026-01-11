<?php
/**
 * Copyright (c) 2025. All rights reserved.
 * @author: Volodymyr Hryvinskyi <mailto:volodymyr@hryvinskyi.com>
 */

declare(strict_types=1);

namespace Hryvinskyi\SeoRobotsCategoryApi\Api;

use Magento\Catalog\Model\Category;

/**
 * Resolves robots meta tag settings from category attributes
 */
interface CategoryRobotsResolverInterface
{
    /**
     * Get robots meta tag code for a category page
     *
     * @deprecated Use getCategoryRobotsDirectives() instead
     * @param Category $category
     * @return int|null Robots code or null if using default
     */
    public function getCategoryRobotsCode(Category $category): ?int;

    /**
     * Get robots directive array for a category page (v2.0.0+)
     *
     * @param Category $category
     * @return array Directive array (e.g., ['noindex', 'nofollow']) or empty array if using default
     */
    public function getCategoryRobotsDirectives(Category $category): array;

    /**
     * Check if robots should be applied to products in the category
     *
     * @param Category $category
     * @return bool
     */
    public function shouldApplyRobotsToProducts(Category $category): bool;

    /**
     * Get robots meta tag code for products in the category
     *
     * @deprecated Use getProductRobotsDirectives() instead
     * @param Category $category
     * @return int|null Robots code or null if using default
     */
    public function getProductRobotsCode(Category $category): ?int;

    /**
     * Get robots directive array for products in the category (v2.0.0+)
     *
     * @param Category $category
     * @return array Directive array (e.g., ['noindex', 'nofollow']) or empty array if using default
     */
    public function getProductRobotsDirectives(Category $category): array;
}
