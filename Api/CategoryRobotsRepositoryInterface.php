<?php
/**
 * Copyright (c) 2025. All rights reserved.
 * @author: Volodymyr Hryvinskyi <mailto:volodymyr@hryvinskyi.com>
 */

declare(strict_types=1);

namespace Hryvinskyi\SeoRobotsCategoryApi\Api;

/**
 * Repository for fetching category robots data
 */
interface CategoryRobotsRepositoryInterface
{
    /**
     * Get product robots data for categories
     *
     * Returns array of category data with robots settings
     * Only returns categories where apply_robots_to_products is enabled
     *
     * @param int[] $categoryIds
     * @param int $storeId
     * @return array<int, array{entity_id: int, product_robots_meta_tag: int|null, robots_meta_tag: int|null}>
     */
    public function getProductRobotsDataByCategoryIds(array $categoryIds, int $storeId): array;
}
