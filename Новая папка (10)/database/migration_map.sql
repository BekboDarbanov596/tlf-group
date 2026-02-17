-- Migration: Add coordinates to plots
ALTER TABLE plots ADD COLUMN latitude FLOAT;
ALTER TABLE plots ADD COLUMN longitude FLOAT;
