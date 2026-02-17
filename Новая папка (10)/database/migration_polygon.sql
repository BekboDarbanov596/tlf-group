-- Migration: Add boundary_geojson to plots
ALTER TABLE plots ADD COLUMN boundary_geojson TEXT;
